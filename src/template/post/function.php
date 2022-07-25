<?php 
function product_card($productname, $productprice, $productimg, $productid,$link)
{
    $card=
    '
<div class="card">
    <form action="index.php" method="post">
        <div class="card shadow">
            <div>
                <img src="'.$link.'karya/src/data/product/'.$productimg.'" alt="Image1" class="img card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title">'.$productname.'</h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </h6>
                <p class="card-text">
                    
                </p>
                <h5>
                    <small><s class="text-secondary">$519</s></small>
                    <span class="price">'.$productprice.'</span>
                </h5>

                <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="product_id" value="'.$productid.'">
            </div>
        </div>
    </form>
</div>';
echo $card;

}

?>
