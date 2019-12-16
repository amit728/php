<?php
	$conn = mysqli_connect('localhost', 'root', '', 'phptest');

	if( isset($_GET['submit']) ){
		$title = $_GET['title'];

		$sql 	= "SELECT * FROM posts WHERE title = '$title'";
		$result = mysqli_query( $conn, $sql ); 

		if( mysqli_num_rows( $result ) > 0 ){
			while( $row = mysqli_fetch_array( $result ) ){ ?>
					<tr>
						<td><?php echo $row['id'];  ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['status'];  ?></td>
						<td><?php echo $row['date'];  ?></td>
					</tr>
				<?php }
						}else{?>
							<tr><td colspan="5"><?php echo "No records found"; ?></td>
						<?php }
					}
				?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Example</title>
	<link href="style.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel='stylesheet'>
</head>
<body>

<div class="container pt50">
	<div class="row">
		<div class="col-lg-12">
			<h1> Edit Example</h1>
			<form action="" method="get">
				<div class="form-group">
					<label>Enter Title:</label>
					<input type="text" class="form-control" name="title" value="<?php echo $ ?>">
				</div>
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">
			</form>	
		</div>
	</div>
</div>



</body>
</html>


