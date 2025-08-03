<?php
include "../admin/config.php";
session_start();

if(!isset($_SESSION['name'])) {
  echo "<script>window.location.href ='login.php'</script>";  
};
$id = $_SESSION['id'];
$query = "select * from users where id  ='$id'";
$result= mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Expert &mdash; </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Muli:300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      
  .action {
    position: fixed;
    top: 20px;
    right: 30px;
  }
  
  .action .profile {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
  }
  
  .action .profile img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .action .menu {
    position: absolute;
    top: 120px;
    right: -10px;
    padding: 10px 20px;
    background: #fff;
    width: 200px;
    box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    transition: 0.5s;
    visibility: hidden;
    opacity: 0;
  }
  
  .action .menu.active {
    top: 80px;
    visibility: visible;
    opacity: 1;
  }
  
  .action .menu::before {
    content: "";
    position: absolute;
    top: -5px;
    right: 28px;
    width: 20px;
    height: 20px;
    background: #fff;
    transform: rotate(45deg);
  }
  
  .action .menu h3 {
    width: 100%;
    text-align: center;
    font-size: 18px;
    padding: 20px 0;
    font-weight: 500;
    color: #555;
    line-height: 1.5em;
  }
  
  .action .menu h3 span {
    font-size: 14px;
    color: #cecece;
    font-weight: 300;
  }
  
  .action .menu ul li {
    list-style: none;
    padding: 16px 0;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    display: flex;
    align-items: center;
  }
  
  .action .menu ul li img {
    max-width: 20px;
    margin-right: 10px;
    opacity: 0.5;
    transition: 0.5s;
  }
  
  .action .menu ul li:hover img {
    opacity: 1;
  }
  
  .action .menu ul li a {
    display: inline-block;
    text-decoration: none;
    color: #555;
    font-weight: 500;
    transition: 0.5s;
  }
  
  .action .menu ul li:hover a {
    color: #ff5d94;
  }
    </style>
  </head>
  <!-- <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300"> -->
  

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="index.html" class="text-uppercase"><img class="me-1" src="../admin/assets/images/fgfg.png" alt="" style="width: 50px;">LAB AUTOMATION</a></div>
          <div>
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="aboutus.php" class="nav-link">About Us</a></li>
                <li><a href="#contact-section" class="nav-link">Contact Us</a></li>
                <li><a href="addproduct.php" class="nav-link">Product</a></li>

                
              </ul>
            </nav>
          </div>
            <div class="ml-auto">
              <nav class="site-navigation position-relative text-right" role="navigation">
                
                <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                <?php
                  if (!isset($_SESSION['name'])) {
                    echo '<li class="cta"><a href="login.php" class="nav-link"><span class="border bg-danger rounded text-white border-danger">Sign Up</span></a></li>';
                  }
                  ?>
                </ul>
              </nav>
              <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
            </div>
            <div class="action">
      <div class="profile" onclick="menuToggle();">
      <img src="../admin/uploads/<?php echo $row["img"]?>" alt="image">
      </div>
      <div class="menu">
        <h3><?php  if(isset($_SESSION['name'])){
                                    echo $_SESSION['name'];
                                }?></h3>
        <ul>
          <li>
            <img src="assets/images/edit.png" /><a href="useredit.php?id=<?php echo $row["id"] ?>">Edit profile</a>
          </li>
          <li>
            <img src="assets/images/log-out.png" /><a href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
          </div>
      </div>
      
    </header>
   <script>
      function menuToggle() {
        const toggleMenu = document.querySelector(".menu");
        toggleMenu.classList.toggle("active");
      }
    </script>