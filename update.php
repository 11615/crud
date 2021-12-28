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

$id = $_GET['updateid'];
$name = $_GET['name'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];
$password = $_GET['password'];

 
// $conn->close();
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
     placeholder="Enter your name" name="name" value="<?php echo $name?>" autocomplete="off">
</div>
<div class="mb-3">
    <label for= >Email</label>
    <input type="email" class="form-control"
     placeholder="Enter your email" name="email" value="<?php echo $email?>"  autocomplete="off">
</div>
<div class="mb-3">
    <label for= >Mobile</label>
    <input type="text" class="form-control"
     placeholder="Enter your mobile number" name="mobile" value="<?php echo $mobile?>" autocomplete="off">
</div>
<div class="mb-3">
    <label for= >Password</label>
    <input type="password" class="form-control"
     placeholder="Enter your password" name="password" value="<?php echo $password?>">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
      </div>
  </body>
</html>

<?php 
if(isset($_POST['submit'])){
 
  $id=$_GET['updateid'];
  $sql="UPDATE `crud` SET name='$_POST[name]', email='$_POST[email]', mobile='$_POST[mobile]', password='$_POST[password]' WHERE id='$_GET[updateid]'";

  $result=mysqli_query($conn,$sql);

  if ($result) {
    echo '<script type="text/javascript">alert("Record Updated")</script>';
  } else {
    echo '<script type="text/javascript">alert("Record Not Updated")</script>';
   }
}

$conn->close();
?>