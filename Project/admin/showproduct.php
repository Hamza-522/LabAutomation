<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php';?>
    <?php
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
                      $status = 'approve';
                  }else{
                      $status = 'reject';
                      
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
                            <th class="text-center" scope="col">Actions</th>
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
                                    if($row["status"] == 'approve')
                                    {
                                        echo "<a href='?type=status&operation=deactive&id=".$row["id"]."'>Approve</a>";
                                    }else{
                                        echo "<a href='?type=status&operation=active&id=".$row["id"]."'>Reject</a>";
                                    }
                                    ?>
                                </td>
                            <td><img src="uploads/<?php echo $row["pimg"]?>" alt=""></td>
                            <td class="text-center">
                                <a href="editproduct.php?id=<?php echo $row["id"]?>" class="btn btn-success" style="padding:14px 20px;">Edit</a>
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
                               
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script
<script>
$(document).ready(function()
{
$("#search").on("keyup",function()
{
var searchword = $(this).val();
console.log(searchword);
$.ajax({
url:"filter.php",
type:"POST",
data:{search:searchword},
success:function(data)
{
$("#table-data").html(data)
}
})
})
})
</script>
    <!-- <?php include 'footer.php'?> -->
                                    
</body>
</html>