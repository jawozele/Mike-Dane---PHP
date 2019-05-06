<!DOCTYPE html>
<html>
<head>
<title>Post v Get</title>
</head>
<body>

<form action="postvget.php" method="post">
	Password: <input type="password" name="password"> <br>
	<input type="submit">
</form>
<br><br>


<?php

	echo $_POST["password"];

?>

</body>
</html>
