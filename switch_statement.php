<!DOCTYPE html>
<html>
<head>
<title>Input</title>
</head>
<body>


	<form action="switch_statement.php" method="post">
		What was your grade?
		<input type="text" name="grade" placeholder="Please enter your grade">
		<input type="submit">
	</form>



	<?php

	$grade = $_POST["grade"];
	switch($grade){
		case "A":
			echo "You got an A! That's an awesome grade";
			break;
		case "B":
			echo "You got a B! That's a good grade";
			break;
		case "C":
			echo "Pssh! It's a C grade! Mannnn, you gotta revise";
			break;
		case "D":
			echo "You got a D!!! Denial of Service!!!C'mon mannn!!! WTH";
			break;
		case "F":
			echo "You really wanna be a donut? Huh?";
			break;
		default:
			echo "Don't be silly! Or did you Get a G? Please enter a number from A-D :)";


