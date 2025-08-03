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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['num'];
        $pass = $_POST['pswd'];
        $role = $_POST['role'];
        $insert = "INSERT INTO `users`( `name`, `email`,`num`,`password`, `role`) VALUES ('$name','$email','$number','$pass','$role')";
        $result = mysqli_query($con,$insert);
        if($result){
            echo "<script>
                     alert('Tester Add successfully');
                     window.location.href = 'showUser.php';
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
                    <h4 class="card-title">Testers</h4>
                    <p class="card-description">Add Tester</p>
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="name" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputName1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Number</label>
                        <input type="number" class="form-control" name="num" id="exampleInputName1" placeholder="Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="password" class="form-control" name="pswd" id="exampleInputName1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Role</label>
                        <input type="text" class="form-control" name="role" id="exampleInputName1" placeholder="Role" value="tester">
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