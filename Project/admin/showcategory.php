<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <?php
    include "header.php";
    include "config.php";
    if(isset($_GET["type"]) && $_GET["type"] !='' )
    {
        $type = $_GET["type"];
        if($type == "status")
        {
            $operation = $_GET["operation"];
            $id= $_GET["id"];
        if($operation == 'active')
            {
                $status = 'active';
            }else{
                $status = 'inactive';
                
            }
            $update = "UPDATE `categories` SET `status`='$status' WHERE id = '$id'";
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
                    <thead  class="text-center">
                        <tr>
                        <th scope="col">Id</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Category Status</th>                       
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody  class="text-center">
                        <?php
                        include "config.php";
                        $query = "SELECT * FROM `categories`";
                        $result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="table">

                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["cname"] ?></td>
                                <td>
                                    <?php 
                                    if($row["status"] == 'active')
                                    {
                                        echo "<a href='?type=status&operation=deactive&id=".$row["id"]."'>Active</a>";
                                    }else{
                                        echo "<a href='?type=status&operation=active&id=".$row["id"]."'>Inactive</a>";
                                    }
                                    ?>
                                </td>
                                
                                <td  class="text-center">
                                    <a href="editcategory.php?id=<?php echo $row["id"] ?>" class="btn btn-info" style="padding:14px 20px;">Edit</a>
                                    <a href="deletecategory.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" style="padding:14px 20px;">Delete</a>
                                </td>

                            </tr>









                        <?php
                        }
                        ?>


                    </tbody>
                </table>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
  
</body>

</html>