<?php
session_start();

if(isset($_SESSION['username'])){
	echo "You are already login!..";
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session Example</title>
</head>
<body>
<form action="" method="post">
	<p>Username: <input type="text" name="username"></p>
	<p>Password: <input type="password" name="password"></p>
	<p><input type="submit" name="submit" value="submit"></p>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$_SESSION['username'] = $_POST['username'];
	header('location:session_data.php');
}
?>