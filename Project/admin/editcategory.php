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
        $cid = $_POST["cid"];
        $name = $_POST["name"];
        // print_r($name);die();
        $query = "UPDATE `categories` SET `cname`='$name' WHERE id = '$cid'";
        $result = mysqli_query($con,$query);
        if($result)
        {
            echo "<script>alert('Record Updated Successfully')
            window.location.href= 'showcategory.php';
            </script>";
        }
        else{
          echo "<script>alert('Record Updation Failed')</script>";

        }
    }
    ?>
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             <?php
             $id = $_GET["id"];
             $query = "SELECT * FROM `categories` where id = '$id'";
             $result = mysqli_query($con,$query);
             $row = mysqli_fetch_assoc($result);
             ?> 
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <!-- <p class="card-description"> Basic form elements </p> -->
                    <form class="forms-sample" method="post">
                        <input type="hidden" name="cid" value="<?php echo $id; ?>">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" value="<?php echo $row["cname"]?>" class="form-control" id="exampleInputName1" placeholder="Name">
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