<?php
session_start();
if(isset($_SESSION['username'])){
echo "Welcome ".$_SESSION['username']."<br>";

}else{
	echo "You are not login!..."."<br>";
	//header('location: session.php');
}
?>

<p><a href="logout.php">Logout</a></p>