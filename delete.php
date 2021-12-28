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

  $id = $_GET['id'];

  $query = "DELETE FROM crud WHERE id = '$id'";
  $data=mysqli_query($conn,$query);

  if ($data) {
    //echo "Record Deleted Successfully";
    header('location:display.php');
  }
  else{
    echo "Record Not Deleted Successfully";
  }
?>