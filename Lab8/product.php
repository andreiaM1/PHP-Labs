<?php
    if(isset($_GET['id'])){
        $stmt=$pdo->prepare('SELECT * FROM products WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        $product=$stmt->fetch(PDO::FETCH_ASSOC);
        if(!$product){
            exit('Product does not exist');
        }
    }
    else {
        exit('Product does not exist');
    }
?>
<?php echo template_header('Product')?>
<div class="product content-wrapper">
    <img src="images/<?php echo $product['image']?>" width="500" height="500">
    <div>
        <h1 class="name"><?php echo $product['name']?></h1>
        <span class="price">
            &dollar;<?php echo $product['price']?>
            <?php if ($product['rrp'] > 0): ?>
            <span class="rrp">&dollar;<?=$product['rrp']?></span>
            <?php endif; ?>
        </span>
        <form action="index.php?page=cart" method="post">
                <input type="number" name="quantity" value="1" min="1" max="<?php echo $product['quantity']?>" placeholder="Quantity is required">
                <input type="hidden" name="product_id" value="<?php echo $product['id']?>">
                <input type="submit" value="Add to cart">
        </form>
        <div class="description">
                <?php echo $product['description']?>
        </div>
    </div>
</div>
<?=template_footer()?>