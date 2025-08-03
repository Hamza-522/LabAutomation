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
          if(isset($_GET["type"]) && $_GET["type"] !='' )
          {
              $type = $_GET["type"];
              if($type == "status")
              {
                  $operation = $_GET["operation"];
                  $id= $_GET["id"];
              if($operation == 'active')
                  {
                      $status = '1';
                  }else{
                      $status = '0';
                      
                  }
                  $update = "UPDATE `products` SET `status`='$status' WHERE id = '$id'";
                  mysqli_query($con,$update);
              }
          }       
    ?>
    


         
<div class="content-wrapper">
            <div class="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h1 class="h1 text-center mb-5">PRODUCTS LIST</h1>
                    <p class="card-description">Show Products</p>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Description</th>                       
                            <th scope="col">Status</th>                      
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM `products`";
                            $result = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["pname"]?></td>
                            <td><?php echo $row["pdesc"]?></td>
                            <td>
                                    <?php 
                                    if($row["status"] == 1)
                                    {
                                        echo "<a href='?type=status&operation=deactive&id=".$row["id"]."'>Active</a>";
                                    }else{
                                        echo "<a href='?type=status&operation=active&id=".$row["id"]."'>Deactive</a>";
                                    }
                                    ?>
                                </td>
                            <td><img src="../admin/uploads/<?php echo $row["pimg"]?>" alt=""></td>
                            <td>
                                <a href="editproduct.php?id=<?php echo $row["id"]?>" class="btn btn-success " style="padding:14px 20px;">Edit</a>
                                <a href="deleteproduct.php?id=<?php echo $row["id"]?>" class="btn btn-danger " style="padding:14px 20px;">Delete</a>
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