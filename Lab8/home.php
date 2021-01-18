<?php
    $stmt=$pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
    $stmt->execute();
    $recently_added_products=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>
<div class="content-wrapper">
    <h2>Gadgets</h2>
    <p>Essential gadgets for daily use</p>
</div>
<h2>Recently added products</h2>
<div class="product content-wrapper">
<?php 
    foreach($recently_added_products as $product): ?>
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
            
<?=template_footer()?>