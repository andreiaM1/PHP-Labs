<?php
    session_start();
    require_once("..\controllers\Product.php");
    if(!$_SESSION['loggedin'] or $_SESSION['userType'] != 'Admin'){
        header("Location:login.php");
    }
    $productController = new Product();
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $category_id = $_GET['category'];

        if(!(empty($name) or empty($image) or empty($price))){
            if($_GET['action'] == "update"){
                $product_id = $_GET['product_id'];
                $productController->updateProductById($product_id,$name,$image,$price,$description);
            }
            else 
                $productController->addProduct($category_id,$name,$image,$price,$description);
                    header("Location:manage.php");
        }
        else {
            ?> <div class="error">All fields are mandatory</div><?php
        }
    }
    if(isset($_GET['action'])){
        if($_GET['action'] == "update")
            $product = $productController->getProductById($_GET['product_id']);
?>
<html>
<head>
    <title>Update Products</title>
    <link rel="stylesheet" href="..\styles\register-login-style.css">
</head>
<body>
<div class="header">
	<h2><?php if($_GET['action']=='update') echo "Update Product"; else echo "Add a New Product"?></h2>
</div>    
<div class="update-products">
    <form action="" method="post">
        <div class="input-group">
            <label>Product Name</label>
            <input type="text" name="name" value="<?php if($_GET['action']=='update') echo $product[0]['name'];?>"/>
        </div>
        <div class="input-group">
            <label>Image</label>
            <input type="text" name="image" value="<?php if($_GET['action']=='update') echo $product[0]['image'];?>"/>
        </div>
        <div class="input-group">
            <label>Price</label>
            <input type="text" name="price" value="<?php if($_GET['action']=='update') echo $product[0]['price'];?>"/>
        </div>
        <div class="input-group">
            <textarea  name="description" rows="5" cols="100"><?php if($_GET['action']=='update') echo $product[0]['description'];?></textarea>
        </div>
        <div class="input-group">
            <input type="submit" name="submit" value="<?php if($_GET['action']=='update') echo "Update"; else echo "Add"?>">
        </div>
    </form>
</div>
</body>
</html>
<?php
    }
?>
