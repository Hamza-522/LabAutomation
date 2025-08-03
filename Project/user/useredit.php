<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .image-container {
            width: 250px;
            height: 250px;
            overflow: hidden;
            position: relative;
            border: 2px dashed #ddd;
            border-radius: 5px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <?php
    include '../admin/config.php';
    include 'header.php';
    if(isset($_POST['submit'])){
        $id = $_POST['uid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['num'];
        $pass = $_POST['pswd'];
        $img =$_FILES["img"]["name"];
        $temping =$_FILES["img"]["tmp_name"];
        $folder ="uploads/".$img;
         move_uploaded_file($temping,$folder);
        $role = $_POST['role'];
        $update = "UPDATE `users` SET `name`='$name',`email`='$email',`num`='$number',`password`='$pass',`img`='$img',`role`='$role' WHERE id = '$id' ";
        $result = mysqli_query($con,$update);
        if($result){
            echo "<script>
                     alert('Edit successfully');
                     window.location.href = 'index.php';
                  </script>";
            
        }else{
            die($con);
        }
    }
  
    ?>
<div class="container" 
    style="padding-top: 100px;
           padding-bottom:100px ;">
<div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Edit Users</h3>
                        <?php 
                        $id = $_GET['id'];
                        $query = "SELECT * FROM `users` WHERE id = '$id'";
                        $res = mysqli_query($con,$query);
                        $row = mysqli_fetch_assoc($res);
                        ?>
                        <form class="forms-sample" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="uid" value="<?php echo $id?>">
                            <div class="form-group">
                                <div class="row">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="image-container" id="image-container">
                                            <img src="../admin/uploads/<?php echo $row["img"]?>" alt="">
                                        </div>
                                        <input type="file" name="img" id="image-input" style="display: none;" accept="image/*"><br>
                                        <label>Drag & Drop or Click Image</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="name" class="form-control" name="name" value="<?php echo $row['name']?>"><br>
                                        <label for="exampleInputName1">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>"><br>
                                        <label for="exampleInputName1">Password</label>
                                        <input type="password" class="form-control" name="pwsd" value="<?php echo $row['password']?>"><br>
                                        <label for="exampleInputName1">Number</label>
                                        <input type="number" class="form-control" name="num" value="<?php echo $row['num']?>"><br>
                                        <input type="hidden" class="form-control" name="role" value="<?php echo $row['role']?>"><br>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" name="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        
        const imageContainer = document.getElementById('image-container');
        const imageInput = document.getElementById('image-input');

        imageContainer.addEventListener('dragover', (e) => {
            e.preventDefault();
            imageContainer.style.border = '2px dashed #007BFF';
        });

        imageContainer.addEventListener('dragleave', () => {
            imageContainer.style.border = '2px dashed #ddd';
        });

        imageContainer.addEventListener('drop', (e) => {
            e.preventDefault();
            imageContainer.style.border = '2px dashed #ddd';
            const file = e.dataTransfer.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    imageContainer.innerHTML = `<img src="${e.target.result}" alt="">`;
                };
                reader.readAsDataURL(file);
            }
        });

        imageContainer.addEventListener('click', () => {
            imageInput.click();
        });

        imageInput.addEventListener('change', () => {
            const file = imageInput.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    imageContainer.innerHTML = `<img src="${e.target.result}" alt="">`;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    <?php include 'footer.php'?>
    
</body>
</html>