<?php
    include('mysql_connect.php');
    session_start();
?>

<html>
<head>
    <title>SIT Widgets</title>
</head>
<body>
    <h1>SIT Widgets</h1>
    <p>View and create your widgets!</p>
    <?php
        // Disable XSS Protection
        header('X-XSS-Protection: 0;');

        if (!empty($_POST['name'])) {
            $_SESSION['user'] = strip_tags($_POST['name']);
        }

        if (!empty($_POST['widget-name'])) {
            $widget = $_POST['widget-name'];
            $query = $link->prepare("INSERT INTO widget VALUES (?, ?)");
            $query->bind_param('ss', $pName, $pOwner);
            $pName = $_POST['widget-name'];
            $pOwner = $_SESSION['user'];
            $query->execute();
        }

        if (empty($_SESSION['user'])) {
            echo "<form method='POST'>
                <input type='text' name='name' />
                <input type='submit' />
            </form>";
        } else {
            echo "<h1>Hi " . $_SESSION['user'] . "!</h1>";
            echo "<h2>New Widget</h2>";
            echo "<form method='POST'>
                <input type='text' name='widget-name' />
                <input type='submit' />
            </form>";
            $query = $link->prepare('SELECT * FROM widget WHERE owner = ?');
            $query->bind_param('s', $pOwner);
            $pOwner = $_SESSION['user'];
            $query->execute();
            $query->bind_result($name, $owner);
            echo "<ul>";
            while ($query->fetch()) {
                echo "<li>" . $name . "</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>
