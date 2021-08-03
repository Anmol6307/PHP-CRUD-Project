<?php
include 'connection.php';
if(isset($_GET['deleteit'])){
    $id=$_GET['deleteit'];

    $sql="DELETE FROM crudoprations where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Deleted Successfully...!";
       header('location:show.php');
    }
    else{
        die(mysqli_error($conn));
        }
}
?>