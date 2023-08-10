<?php 
function product_card($name, $price,$address,$contact,$img,$link)
{
    $productcard=
    '<div class="product-card">
    <div class="product-tumb">
        <img src='.$link.'/karya/src/data/product/'.$img.' alt="no img">
    </div>
    <div class="product-details">
        <span class="product-catagory"></span>
        <h4><a href="">'.$name.'</a></h4>
        <p>Phone:'.$contact.'<br>Address:'.$address.'</p>
        <div class="product-bottom-details">
            <div class="product-price">Rs.'.$price.'</div>
            <div class="product-links">
                <button type="submit" class="btn signin" name="add" style="width:150px;"><i class="fa fa-shopping-cart" style="margin-right:5px;"></i>Add to cart</button>
            </div>
        </div>
    </div>
</div>';
echo $productcard;

}
function product_card2($productname, $productprice, $productimg, $productid,$link)
{
    $productcard=
    '<div class="product-card2">
    <div class="product-tumb2">
        <img src="'.$link.'/karya/src/data/product/'.$productimg.'png" alt="no img" >
    </div>
    <div class="product-details2">
        <div>
            <span class="product-catagory">'.$productname.'</span>
            <h4><a href="">KBC</a></h4>
            <p></p>
        </div>
        <div class="product-bottom-details2">
            <div class="product-price">RS.'.$productprice.'</div>
            <div class="product-links">
                <a href=""><i class="fa fa-heart"></i></a>
                <a href=""><i class="fa fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>
</div>  >';
echo $productcard;

}

?>
