<html>
<head>
    <title>SIT Generator!</title>
</head>
<body>
    <?php
        if(empty($_POST)) {
            echo "<h1>SIT Generator</h1>
            <p>Want a badass hacker name like Kernel Sanders? Well, here's your chance! We'll generate you a badass hacker name for free with our new SIT Generator!</p>
            <form method='POST'>
                <p>Name:</p>
                <input type='text' name='name' />
                <input type='submit' value='Submit' />
            </form>";
        } else {
            // Pesky XSS auditor!
            header('X-XSS-Protection: 0;');
            echo "<h1>Your name: " . $_POST['name'] . "</h1>";
            $hacker_name = $_POST['name'];
            $hacker_name = str_replace('a', '0x0A', $hacker_name);
            $hacker_name = str_replace('A', '0x0A', $hacker_name);
            $hacker_name = str_replace('e', '3', $hacker_name);
            $hacker_name = str_replace('E', '3', $hacker_name);
            $hacker_name = str_replace('o', '0', $hacker_name);
            $hacker_name = str_replace('O', '0', $hacker_name);
            echo "<p>Your hacker name: " . $hacker_name . "</p>";
        }
    ?>
</body>
</html>
