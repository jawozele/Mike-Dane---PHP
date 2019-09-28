<!DOCTYPE html>
<html>
<head>
<title>Input</title>
</head>
<body>


<?php ?>
    

    <!-- <form action="site.php" method="get">

    	Name: <input type="text" name="username" placeholder="username">
    	Age: <input type="number" name="age" placeholder="age">
    	<input type="Submit">

    </form>
    <br>
    Your name is <?php echo $_GET["username"] ?>
    <br>
    Your age is <?php echo $_GET["age"] ?> -->
    

<form action="site.php" method="get">
	<input type="number" name="num1" placeholder="enter a number">
	<br>
	<input type="number" name="num2" placeholder="enter another number">
	<input type="submit">
</form>

<!DOCTYPE html>
<html>
<head>
<title>Input</title>
</head>
<body>


<?php
?>
   

    <!-- <form action="site.php" method="get">

        Name: <input type="text" name="username" placeholder="username">
        Age: <input type="number" name="age" placeholder="age">
        <input type="Submit">

    </form>
    <br>
    Your name is <?php
echo $_GET["username"];
?>
   <br>
    Your age is <?php
echo $_GET["age"];
?> -->
    

<form action="site.php" method="get">
    <input type="number" name="num1" placeholder="enter a number">
    <br>
    <input type="number" name="num2" placeholder="enter another number">
    <input type="submit">
</form>


 <?php
echo $_GET["num1"] + $_GET["num2"];
?>


</body>
</html>

    

 <?php echo $_GET["num1"] + $_GET["num2"] ?>


</body>
</html>

    

</body>
</html>
