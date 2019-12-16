<?php
$conn = mysqli_connect('localhost', 'root', '', 'phptest');

if(isset($_POST['submit'])){
	$title 	= $_POST['title'];
	$desc 	= $_POST['description'];
	
	$sql = "INSERT INTO posts (title, description) VALUES('$title', '$desc')";
	//$sql2 ="SELECT * FROM 'posts'";

	$run = 	mysqli_query($conn, $sql);
	//$run2 = mysqli_query($conn, $sql2);
	
	if( $run ){
		echo "Data Inserted Successfully";
	}else{
		echo "Not inserted, Please try again";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Example</title>
	<link href="style.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel='stylesheet'>
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<form action="" method="post">
				<p>Title: <input type="text" name="title"></p>
				<p>Description: <textarea name="description"></textarea></p>
				<p><input type="submit" name="submit" value="submit"></p>
			</form>
			<h1>Insert Data Example</h1>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Description</th>
						<th>Status</th>
						<th>date</th>	
					</tr>
				</thead>
				<tbody>
				<?php
					$sql2 ="SELECT * FROM posts";
					$run2 = mysqli_query($conn, $sql2);
					if( $run2 ){
						while( $row = mysqli_fetch_array( $run2 )){ ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['status']; ?></td>
						<td><?php echo $row['date']; ?></td>
					</tr>
					<?php 
					}
					} 
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>