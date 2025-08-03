<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .site-navbar .site-navigation .site-menu > li > a {
    padding: 5px 20px;
    color: #000;
    display: inline-block;
    text-decoration: none !important;
}
    </style>
</head>
<body>
    <?php
    include '../admin/config.php';
    include 'header.php';
    if(isset($_POST['submit'])){
      $name = $_POST["name"];
      $dis = $_POST["disc"];
    
      // Check if an image file was uploaded
      if(isset($_FILES["img"]) && $_FILES["img"]["error"] == UPLOAD_ERR_OK){
        $img = $_FILES["img"]["name"];
        $temping = $_FILES["img"]["tmp_name"];
        $folder = "../admin/uploads/" . $img;
        move_uploaded_file($temping, $folder);
        
        $insert = "INSERT INTO `products`(`pname`, `pdesc`, `pimg`) VALUES ('$name','$dis','$img')";
        $result = mysqli_query($con, $insert);
    
        if($result){
          echo "<script>alert('Record Inserted Successfully')</script>";
        } else {
          die($con);
        }
      } else {
        echo "<script>alert('Please select a product image.')</script>";
      }
    }
    ?>

    
<script>
  const nameInput = document.getElementById('nameInput');
  const nameError = document.getElementById('nameError');

  nameInput.addEventListener('input', function () {
    const inputValue = nameInput.value;
    const isAlpha = /^[a-zA-Z]+$/.test(inputValue);
    
    if (isAlpha) {
      nameError.textContent = ''; // Clear the error message
    } else {
      nameError.textContent = 'Only alphabetic characters are allowed.';
    }
  });
</script>


    <div class="container" 
    style="padding-top: 100px;
           padding-bottom:100px ;">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <h1 class="mb-5 mt-5 text-white">Add Your Product</h1>
        <form class="forms-sample" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label for="exampleInputName1" class="text-white">Name</label>
        <input type="text" class="form-control" name="name" id="nameInput" placeholder="Name" required>
        <small class="text-danger" id="nameError"></small>
      </div>
                      <div class="form-group">
                        <label for="exampleInputName1" class="text-white">Product Description</label>
                        <input type="text" class="form-control" name="disc"  required>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputName1" class="text-white">Product  Categories</label>
                        <select class="form-select" name="cat" aria-label="Default select example" style="width: 100%; padding: 2%;" required>
                            <option selected>Select Product Category</option>
                            <?php
                            $query = "SELECT * FROM `categories`";
                            $result = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                            <option value="<?php echo $row["id"]?>"><?php echo $row["cname"]?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
    <label for="exampleInputPassword1" class="form-label text-white" required>Product Image</label>
    <input type="file" name="img" class="form-control" required>
</div>
                      <button type="submit" name="submit" class="btn text-white me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>

    <?php include 'footer.php'?> 
</body>
</html>