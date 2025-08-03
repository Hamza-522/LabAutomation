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
              
              <div class="col-12 grid-margin stretch-card w-100">
                <div class="card w-100Q1Q">
                  <div class="card-body">
                    <h1 class="h1 text-center mb-5">USER LIST</h1>
                    <p class="card-description">Show Users</p>
                    <table class="table table-hover">
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM `contact`";
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res)){
                        ?>
                        <tr style="width: 30px;">
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['fname']?></td>
                            <td><?php echo $row['lname']?></td>
                            <td><?php echo $row['subject']?></td>
                            <td><?php echo $row['email']?></td>
                            <td style="width: 30px" ><?php echo $row['msg']?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                 
                </table>
                  </div>
                </div>
              </div>
             
            </div>
          </div>





     <?php include 'footer.php'?> 
</body>
</html>