<?php 
require_once "..\controllers\Product.php";
require_once "PageTemplate.php";
PageTemplate::template_header("Home");?>

<h4 id="all-categories-subtitle">Categories of available products</h4>
<div class="all-categories">
<?php
$product =  new Product();
$categories = $product->getAllCategories();
if (!empty($categories)) {
foreach ($categories as $key => $category) {
 ?>
<div class="txt-heading"><?php echo $category['name'];?></div>
<?php
}
}
?>
</div>

<?php 
require_once "PageTemplate.php";
PageTemplate::template_footer();?>