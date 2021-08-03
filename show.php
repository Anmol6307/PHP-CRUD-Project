<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Oprations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid my-5 btn btn-center bg-warning">
     <button class ="btn btn-outline-success"><a href="user.php" class="text-light">Add Users</a></button>
    </div>
    <table class="table table-dark table-hover text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="select * from crudoprations";
  $result=mysqli_query($conn,$sql);
  if($result){
    while($row = mysqli_fetch_assoc($result)){
       $id=$row['id'];
       $name=$row['name'];
       $email=$row['email'];
       $password=$row['password'];
       echo '<tr>
       <th scope="row">'.$id.'</th>
       <td>'.$name.'</td>
       <td>'.$email.'</td>
       <td>'.$password.'</td>
       <td>
       <button class="btn btn-warning"><a href="update.php? updateit='.$id.'" class="text-light">Update</a></button>
       <button class="btn btn-danger"><a href="delete.php? deleteit='.$id.'" class="text-light">Delete</a></button> 
       </td>
     </tr>';
    }
  }
  ?>
  </tbody>
</table>
</body>
</html>