<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<?php 
include "../admin/config.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['num'];
    $pass = $_POST['pswd'];
    $insert = "INSERT INTO `users`( `name`, `email`, `num`, `password`)  VALUES ('$name','$email','$number','$pass')";
    $result = mysqli_query($con,$insert);
    if($result){
        echo "<script> alert('Registration Successful')</script>";
    }else{
        die($con);
    }
}

?>


<div class="signup">
				<form method="post" action="login.php">
					<label for="chk" aria-hidden="true" style="margin: 39px;">Sign up</label>
					<input type="text" name="name" placeholder="User name" required="" >
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="num" placeholder="Number" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit" name="submit" >Sign up</button>
				</form>
			</div>

            </body>
</html>