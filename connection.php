<?php
$conn = new mysqli('localhost','root','','php_crud_project');
if(!$conn){
    die(mysqli_error($conn));
}
?>