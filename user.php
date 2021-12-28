<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudoperation";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql= '' ;
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="INSERT INTO `crud` (name ,email ,mobile, password)
  VALUES('$name','$email','$mobile','$password')";
  if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header('location:display.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
      <div class="container my-5">
      <form method="post">
  <div class="mb-3">
    <label for= >Name</label>
    <input type="text" class="form-control"
     placeholder="Enter your name" name="name" autocomplete="off">
</div>
<div class="mb-3">
    <label for= >Email</label>
    <input type="email" class="form-control"
     placeholder="Enter your email" name="email"  autocomplete="off">
</div>
<div class="mb-3">
    <label for= >Mobile</label>
    <input type="text" class="form-control"
     placeholder="Enter your mobile number" name="mobile"  autocomplete="off">
</div>
<div class="mb-3">
    <label for= >Password</label>
    <input type="password" class="form-control"
     placeholder="Enter your password" name="password">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
      </div>
    

   
  </body>
</html>