<?php

$value = "Amit gupta";
$exptime = time() + 86400;

setcookie('name', $value, $exptime);
 echo $_COOKIE['name'];
$unsetcookie = time() - 86400;

//setcookie('name', '', $unsetcookie);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookie Example</title>
</head>
<body>
<h1>Cookie Example</h1>
<p><?php ?></p>
</body>
</html>