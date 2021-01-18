<?php
    require_once("..\controllers\Product.php");
    require_once("PageTemplate.php");
    session_start();

    if(!$_SESSION['loggedin']){
        header("Location:login.php");
    }

    PageTemplate::template_header("Product");

    $productController = new Product();
    if(isset($_GET['id'])){
        $product = $productController->getProductById($_GET['id']);
        ?>
            <form method="post" action="cart.php?action=add&id=<?php echo $product[0]['id']; ?>">
                <div class="single-product-wrapper">
                <div class="single-product-image">
                    <img src="<?php echo "..\images\\".$product[0]['image'];?>"  height="350" width="400">
                </div>
                <div class="single-product-title-footer">
                    <div class="single-product-title-price">
                        <p><?php echo $product[0]['name']; ?></p>
                        <p>RON <?php echo $product[0]['price']; ?></p>
                    </div>
                    <div class="cart-action">
                        <input type="text" name="quantity" value="1" size="2" />
                        <input type="submit" value="Add to cart" class="btnAddAction" />
                    </div>
                    </div>
                </div>
                </div>
            </form>
            <div class="single-product-details">
                    <p><?php echo $product[0]['description'];?></p>
            </div>
    <?php
    }

    PageTemplate::template_footer();
?>