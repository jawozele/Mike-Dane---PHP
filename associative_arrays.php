<!DOCTYPE html>
<html>
<head>
<title>Associative Arrays</title>
</head>
<body>

<form action="associative_arrays.php" method="post">
	<input type="text" name="student">
	<input type="submit">
</form>



<?php

	$grades = array("Jim"=>"A+", "Josh"=>"B-", "Pam"=>"C+", "Oscar"=>"D+");
	echo $grades[$_POST["student"]];








?>
</body>
</html>
