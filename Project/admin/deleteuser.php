<?php 

include 'config.php';
$id=$_GET['id'];
$drop = "DELETE FROM `users` WHERE id = '$id'";
$res = mysqli_query($con , $drop);
if($res){
    header('location:showUser.php');

}else{
    echo '<script>alert("Error")</script>';  

}



?>