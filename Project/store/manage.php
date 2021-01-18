<?php
session_start();
require_once "..\controllers\Product.php";
if(!$_SESSION['loggedin']){
    header("Location:login.php");
}
if($_SESSION['userType'] != "Admin"){
    header("Location:login.php");
}
$productController = new Product();
if(isset($_GET['action'])){
        $productController->deleteProductById($_GET['product_id']);
}
?>
<?php 
require_once "PageTemplate.php";
PageTemplate::template_header("Manage Your Products");?>
        <div id="category-grid">
                <?php
                $product =  new Product();
                $categories = $product->getAllCategories();
                if (!empty($categories)) {
                    foreach ($categories as $key => $category) {
                        ?>
                        <div class="txt-heading"><span><?php echo $category['name'];?></span><span><a class="new-product-button" href="updateProducts.php?action=add&category=<?php echo $category['id'];?>">New Product</a></span></div>
                        <div class="category">
                        <?php
                                $categoryProducts = $product->getProductsByCategory($category['id']);
                                if (!empty($categoryProducts)) {
                                    foreach ($categoryProducts as  $product_item) {
                                ?>
                                        <div class="product-item">
                                                <div class="product-image">
                                                    <img src="<?php echo "..\images\\".$product_item['image'];?>"  height="155p" width="250p">
                                                </div>
                                                <div class="product-title-footer">
                                                    <div class="product-title">
                                                        <p><?php echo $product_item['name']; ?></p>
                                                    </div>
                                                    <div class="product-price">
                                                        <p>RON <?php echo $product_item['price']; ?></p>
                                                    </div>
                                                    <div class="cart-action">
                                                    <a href="manage.php?action=delete&product_id=<?php echo $product_item['id'];?>" class="delete-product">
                                                        Delete
                                                    </a>
                                                    <a href="updateProducts.php?action=update&product_id=<?php echo $product_item['id'];?>&category=<?php echo $category['id'];?>" class="update-product">
                                                        Update
                                                    </a>
                                                    </div>
                                                </div>
                                        
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
                        
                        
                 </div>
         
         <?php 
require_once "PageTemplate.php";
PageTemplate::template_footer();?>