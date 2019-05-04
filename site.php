<!DOCTYPE html>
<html>
<head>
<title>Input</title>
</head>
<body>


<?php ?>
    

    <form action="site.php" method="get">

    	Name: <input type="text" name="username" placeholder="username">
    	Age: <input type="number" name="age" placeholder="age">
    	<input type="Submit">

    </form>
    <br>
    Your name is <?php echo $_GET["username"] ?>
    <br>
    Your age is <?php echo $_GET["age"] ?>
    
    

</body>
</html>
