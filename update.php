<?php
include 'connection.php';
$id=$_GET['updateit'];
$sql="SELECT * FROM crudoprations where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="UPDATE crudoprations set id=$id,name='$name',email='$email',password='$password' where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
       //echo "Updated successfully";
       header('location:show.php');
    }
    else{
       die(mysqli_error($conn));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD Oprations</title>
  </head>
  <body>
   <div class="container-fluid my-5 bg-dark">
    <form method = "POST">
      <div class="mb-3">
        <label for="name" class="form-label text-light">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value=<?php echo $name;?>>
      </div>
      <div class="mb-3">
        <label for="EmailInput" class="form-label text-light">Email address:</label>
        <input type="email" class="form-control" id="EmailInput" name="email" placeholder="Enter your email" aria-describedby="emailHelp" value=<?php echo $email;?>>
        <div id="emailHelp" class="form-text text-warning">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="PasswordInput" class="form-label text-light">Password:</label>
        <input type="password" class="form-control" id="PasswordInput" name="password" placeholder="Enter your password" value=<?php echo $password;?>>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
   </div>
  </body>
</html>