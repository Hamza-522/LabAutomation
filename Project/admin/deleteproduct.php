<?php 

include 'config.php';
$id=$_GET['id'];
$drop = "DELETE FROM `products` WHERE id = '$id'";
$res = mysqli_query($con , $drop);
if($res){
    header('location:showproduct.php');

}else{
    echo '<script>alert("Error")</script>';  

}



?>