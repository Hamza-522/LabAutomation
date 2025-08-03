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
    include 'header.php';
    if(isset($_POST['submit'])){
         $pid = $_POST["pid"];
         $name = $_POST["name"];
         $dis =  $_POST["disc"];
         $img =$_FILES["img"]["name"];
         $temping =$_FILES["img"]["tmp_name"];
        $folder ="uploads/".$img;
      move_uploaded_file($temping,$folder);
      if($temping != ""){
            $update = "UPDATE `products` SET `pname`='$name',`pdesc`='$dis',`pimg`='$img' WHERE id = $pid";
      }else{
        $update = "UPDATE `products` SET `pname`='$name',`pdesc`='$dis' WHERE id = $pid";
      }
      $result = mysqli_query($con,$update);
      if($result){
        echo "<script>alert('Record Inserted Successfully')
            window.location.href= 'showproduct.php';
            </script>";
      }else{
        die($con);
      }
    }
    ?>

<div class="content-wrapper">
            <div class="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product</h4>
                    <?php
                    $id = $_GET["id"];
                    $query1 = "SELECT * FROM `products` WHERE id = '$id'";
                    $result1 = mysqli_query($con,$query1);
                    $row = mysqli_fetch_assoc($result1);
                    ?>
                    <p class="card-description">Add Product</p>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="pid" value="<?php echo $id?>">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="name" class="form-control" name="name" value="<?php echo $row['pname']?>" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Product Description</label>
                        <input type="text" class="form-control" name="disc" value="<?php echo $row['pdesc']?>"   >
                      </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1" class="form-label">Product Image</label><br>
                        <img src="upload/<?php echo $row["pimg"]?>" alt="" height="100px" class="mb-5">
                        <input type="file" name="img"  value="<?php echo $row["pimg"]?>" class="form-control" >
                      </div>
                      <button type="submit" name="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>




<!--     
    <?php include 'footer.php'?> -->
</body>
</html>