<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Fixed</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h1>List_fixed</h1>
    <h4>(XML thui má)</h4>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" accept=".xml">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <br>
    <table class="table">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">School</th>
        </tr>
        <?php
        $xmlDoc = new DOMDocument();
        $xmlDoc->load("Uploads/hack.xml");
        // bỏ đoạn LIBXML_NOENT | LIBXML_DTDLOAD
        $xmlList = simplexml_import_dom($xmlDoc);
        foreach ($xmlList->student as $student) {
            echo "<tr><td>{$student->name}</td><td>{$student->age}</td><td>{$student->school}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
