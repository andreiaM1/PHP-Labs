 <?php
session_start();
require_once "..\controllers\Product.php";
if(!$_SESSION['loggedin']){
    header("Location:login.php");
}
?>
<?php 
$productController = new Product();
require_once "PageTemplate.php";
PageTemplate::template_header("Products");?>
<div id="category-grid">
    <?php
        $product =  new Product();
         $categories = $product->getAllCategories();
        if (!empty($categories)) {
            foreach ($categories as $key => $category) {
                ?>
                <div class="txt-heading"><?php echo $category['name'];?></div>
                <div class="category">
                <?php
                    $categoryProducts = $product->getProductsByCategory($category['id']);
                        if (!empty($categoryProducts)) {
                             foreach ($categoryProducts as  $product_item) {
                            ?>
                            <div class="product-item">
                            <form method="post" action="cart.php?action=add&id=<?php echo $product_item['id']; ?>">
                                <a class="product-image" href="product.php?id=<?php echo $product_item['id'];?>">
                                    <img src="<?php echo "..\images\\".$product_item['image'];?>"  height="155p" width="250p">
                                </a>
                                <div class="product-title-footer">
                                    <div class="product-title">
                                        <p><?php echo $product_item['name']; ?></p>
                                    </div>
                                    <div class="product-price">
                                        <p>RON <?php echo $product_item['price']; ?></p>
                                    </div>
                                    <div class="cart-action">
                                        <input type="text" name="quantity" value="1" size="2" />
                                        <input type="submit" value="Add to cart" class="btnAddAction" />
                                    </div>
                                </div>
                            </form>
                            </div>
                <?php
                            }
                        }
                ?>      
                </div>         
                <?php
                        }
                    }

                ?>
</div>

<?php 
PageTemplate::template_footer();
?>                       
        