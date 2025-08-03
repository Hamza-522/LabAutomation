<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'config.php';
    include 'header.php'?>
  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total User <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <?php 
                        $query = "SELECT * FROM users"; 
                        $result = mysqli_query($con, $query);
                        if ($result) {
                          $total = mysqli_num_rows($result);
                      } else {
                          $total = 0;
                      }
                    ?>

                      <h2 class="mb-5"><?php echo $total; ?></h2>
                      <h6 class="card-text">Increased by 10%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Products <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php 
                        $query = "SELECT * FROM products"; 
                        $result = mysqli_query($con, $query);
                        if ($result) {
                          $total = mysqli_num_rows($result);
                      } else {
                          $total = 0;
                      }
                    ?>
                    <h2 class="mb-5"><?php echo $total; ?></h2>
                    <h6 class="card-text">Decreased by 10%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Tester <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <?php 
                         $query = "SELECT * FROM `users` WHERE `role` = 'tester'"; 
                        $result = mysqli_query($con, $query);
                        if ($result) {
                          $total = mysqli_num_rows($result);
                      } else {
                          $total = 0;
                      }
                    ?>
                    <h2 class="mb-5"><?php echo $total; ?></h2> 
                    <h6 class="card-text">Increased by 5%</h6>
                  </div>
                </div>
              </div>
            </div>

          </div>





    
    <?php include 'footer.php'?>
</body>
</html>