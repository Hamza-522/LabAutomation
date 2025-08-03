<?php
include "config.php";
$id = $_GET["id"];
$query = "DELETE FROM `categories` WHERE id = '$id'";
$result = mysqli_query($con,$query);
if($result)
{
    echo "<script>alert('Deleted Successfully')
    window.location.href= 'showcategory.php';
    </script>";
}
else{
    echo "<script>alert('Failed')
   
    </script>";
}

?>