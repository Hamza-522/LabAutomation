<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php';
          include 'config.php';       
    ?>


    
<div class="content-wrapper">
            <div class="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h1 class="h1 text-center mb-5">USER LIST</h1>
                    <p class="card-description">Show Users</p>
                    <table class="table table-hover">
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM `users`";
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res)){
                        ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['num']?></td>
                            <td><?php echo $row['password']?></td>
                            <td><?php echo $row['role']?></td>
                            <td class="text-center">
                                <a href="editeuser.php?id=<?php echo $row['id']?>" class="btn btn-success " style="padding:14px 20px;">Edit</a>
                                <a href="deleteuser.php?id=<?php echo $row['id']?>" class="btn btn-danger " style="padding:14px 20px;">Delete</a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                 
                </table>
                  </div>
                </div>
              </div>
             
            </div>
          </div>





    <!-- <?php include 'footer.php'?> -->
</body>
</html>