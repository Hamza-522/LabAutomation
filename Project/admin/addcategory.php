<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "header.php";
    include "config.php";
    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $query = "INSERT INTO `categories`(`cname`) VALUES ('$name')";
        $result = mysqli_query($con,$query);
        if($result)
        {
            echo "<script>alert('Record Inserted Successfully')
            window.location.href= 'showcategory.php';
            </script>";
        }
        else{
          echo "<script>alert('Record Insertion Failed')</script>";

        }
    }
    ?>
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Categories </h3>
            
            </div>
            <div class="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2" name="submit">Submit</button>
                    
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          <!-- content-wrapper ends -->



<?php
    include "footer.php";
    ?>
</body>
</html>