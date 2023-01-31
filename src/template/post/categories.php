<?php
session_start();
include("../base/header.php");
include("connection.php");
include("function.php");
?>

<div class="container-product">
    <div class="grid2">
	
    <?php 
                if(isset($_GET["brick"]))
                {
                    
                $sql="SELECT * FROM brick";
                $result= mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result))
                {
                    product_card($row['name'],$row['price'],$row['address'], $row['contact'], $row['product_image'],$link);
                }
                }
                if(isset($_GET["rock"]))
                {
                    $sql="SELECT * FROM rock";
                    $result= mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        product_card($row['name'],$row['price'],$row['address'], $row['contact'], $row['product_image'],$link);
                    }
                }
                if(isset($_GET["sand"]))
                {
                    $sql="SELECT * FROM sand";
                    $result= mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        product_card($row['name'],$row['price'],$row['address'], $row['contact'], $row['product_image'],$link);
                    }
                }
                if(isset($_GET["cement"]))
                {
                    $sql="SELECT * FROM cement";
                    $result= mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        product_card($row['name'],$row['price'],$row['address'], $row['contact'], $row['product_image'],$link);
                    }
                }
                if(isset($_GET["rebar"]))
                {
                    $sql="SELECT * FROM rod";
                    $result= mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        product_card($row['name'],$row['price'],$row['address'], $row['contact'], $row['product_image'],$link);
                    }
                }

            ?>

      <?php
            ?>
    </div>
</div>

<?php
include("../base/footer.php")
?>