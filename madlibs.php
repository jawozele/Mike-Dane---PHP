<!DOCTYPE html>
<html>
<head>
<title>Madlibs Game</title>
</head>
<body>

<form action="madlibs.php" method="get">
    Color: <input type="text" name="color"> <br>
    Plural Noun: <input type="text" name="pluralNoun">
    Celebrity: <input type="text" name="celebrity"> <br>
    <input type="submit">
</form>
<br><br>


<?php
$color      = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity  = $_GET["celebrity"];

echo "Roses are $color <br>";
echo "$pluralNoun is blue <br>";
echo "I love $celebrity <br>";
?>
</body>
</html>
Download
