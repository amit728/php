<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		table{
			width: 40%; 
			border:1px solid #aaa;
		}
		td, th{
			border: 1px solid #aaa;
			text-align: left;
		}
	</style>
</head>
<body>
<form action="fetch.php" method="get">
	<input type="text" name="website">
	<input type="submit" name="submit" value="submit">
</form>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'gamma_backend');

if( isset($_GET['submit']) ){
	$website = $_GET['website'];
	$query = "SELECT * FROM plugins WHERE website = '$website'";
	$result = mysqli_query($conn, $query);
	//print_r($result);die();
?>
	<table>
		<tr>
			<th>Id</th>
			<th>Website</th>
			<th>IP</th>
		</tr>
	<?php if( mysqli_num_rows($result) ){
		while($row = mysqli_fetch_array($result)){ ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['website']; ?></td>
				<td><?php echo $row['ip']; ?></td>
			</tr>
		<?php }
	}else{ ?>
		<tr><td colspan='3'><?php echo "No records found"; ?></td></tr>
	<?php }
	}
	?>
</table>

</body>
</html>

