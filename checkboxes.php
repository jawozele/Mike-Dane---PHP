<!DOCTYPE html>
<html>
<head>
<title>Checkboxes</title>
</head>
<body>

    <form action="checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">



    </form>


    <?php
$fruits = $_POST["fruits"];
echo $fruits[0];
