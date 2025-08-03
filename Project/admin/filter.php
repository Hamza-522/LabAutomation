<?php
include "config.php";
$searchitem = $_POST["search"];
$query = "SELECT * FROM `products` where pname like '%{$searchitem}%' OR pdesc like '%{$searchitem}%''";
$result = mysqli_query($con,$query);
$output = "";
if(mysqli_num_rows($result) > 0)
{
$output = '<table class="table">
';
while($row = mysqli_fetch_assoc($result))
{
$output .= "<tr><td>{$row["id"]}</td><td>{$row["pname"]}</td><td>{$row["pdesc"]}</td><td>{$row["pprice"]}</td><td>{$row["pqty"]}</td><td><img src='uploads/{$row["pimg"]}'</td></tr>";
}
$output .= "</table>";
echo $output;
}
else{
echo $output = "No Record Found";
}
?>