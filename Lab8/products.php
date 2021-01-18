<?php
$no_products_displayed = 4;
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p']:1;
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT ?,?');
$stmt->bindValue(1,($current_page - 1) * $no_products_displayed, PDO::PARAM_INT);
$stmt->bindValue(2,$no_products_displayed,PDO::PARAM_INT);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>
<?=template_header('Products')?>
<div class="products content-wrapper">
    <h1>Products</h1>
    <p><?php echo $total_products?> Products</p>
    <div class="products-wrapper">
        <?php foreach($products as $product): ?>
        <a href="index.php?page=product&id=<?php echo $product['id']?>" class="product">
            <img src="images/<?php echo $product['image']?>" width="200" height="200">
            <span class="name"><?php echo $product['name']?></span>
            <span class="price">
            &dollar;<?php echo $product['price']?>
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp">&dollar;<?php echo $product['rrp']?></span>
            <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if($current_page > 1): ?>
        <a href="index.php?page=products&p=<?php echo $current_page - 1?>">Prev</a>
        <?php endif; ?>
        <?php if($total_products > ($current_page * $no_products_displayed) - $no_products_displayed + count($products)): ?>
        <a href="index.php?page=products&p=<?php echo $current_page + 1?>">Next</a>
        <?php endif; ?>
    </div>
</div>
<?=template_footer()?>
