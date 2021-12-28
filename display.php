

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> Add user</a> 
        
     </button>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
      
      
    </tr>
  </thead>
  <tbody>
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
  $sql = "SELECT * FROM crud";

  $query = mysqli_query($conn, $sql);

  $res = mysqli_num_rows($query);


  while ($result = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $result['id'] ?></td>
      <td><?php echo $result['name'] ?> </td>
      <td><?php echo $result['email'] ?></td>
      <td><?php echo $result['mobile'] ?></td>
      <td><?php echo $result['password'] ?></td>
      <td>
<button class ="btn btn-primary"><a href="update.php? updateid=<?php echo $result['id']?> & name=<?php echo $result['name']?> & email=<?php echo $result['email']?> & mobile=<?php echo $result['mobile']?> & password=<?php echo $result['password']?> " class="text-light">Update</a></button>
<button class ="btn btn-danger"><a href= "delete.php? id=<?php echo $result['id']?> "  class="text-light">Delete</button>
</td>
 </tr>
    <?php
  }
  ?>


    
</tbody>
</table>

    
</body>
</html>

