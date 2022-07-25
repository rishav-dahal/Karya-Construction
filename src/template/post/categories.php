<?php
session_start();

include("../base/header.php");
include("connection.php");
include("function.php");
?>

<div class="container-product">
    <div class="grid">
    <?php
                $sql="SELECT * FROM productdb";
                $result= mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_assoc($result))
                {
                    product_card($row['product_name'], $row['product_price'], $row['product_image'], $row['id'],$link);
                }
            ?>
    </div>
</div>

<?php
include("../base/footer.php")
?>