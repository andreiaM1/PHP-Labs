<?php
    require_once "ShoppingCart.php";
?>
<html>
    <head>
        <title>Create shopping cart</title>
        <link href="style.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div id="product-grid">
            <div class="txt-heading">
                <div class="txt-heading-label">
                Products
                </div>
            </div>
            <?php
            $shoppingCart =  new ShoppingCart();
            $query = "SELECT * FROM tbl_product";
            $produc_array = $shoppingCart->getAllProduct($query);
            if(!empty($produc_array)){
                foreach($produc_array as $key => $value){
            ?>
            <div classs="product-item">
                <form method="post" action="cart.php?action=add&code=<?php echo $produc_array[$key]["code"]?>">
                    <div class="product-image">
                        <img src="<?php echo $produc_array[$key]['image'];?>">
                    </div>
                    <strong><?php echo $produc_array[$key]['name'];?></strong>
                    </div>
                    <div class="product-price"><?php echo "$".$product_array[$key]['price'];?></div>
                    <div>
                        <input type="text" name="quantity" value="1" size="2"/>
                        <input type="submit" value="Add to cart" class="btnAddAction"/>
                    </div>
                </form>
            </div>
            <?php
                }
            }?>
        </div>
    </body>
</html>
