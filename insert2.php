<?php
  $conn = mysqli_connect('localhost', 'root', '', 'phptest');  
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];


  $query = "INSERT INTO users (email, password) VALUES ('$email', '$pwd')";

  $run = mysqli_query($conn, $query);

  if ($run) {
    echo "Success";
  }else{
    echo "Fail";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="index.php" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <input type="submit" name="submit" class="btn btn-default" value="Submit">
  </form>
</div>

</body>
</html>
