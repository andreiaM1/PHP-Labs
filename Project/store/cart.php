<?php
    session_start();
    require_once("..\controllers\Product.php");
    require_once("PageTemplate.php");
    if(!$_SESSION['loggedin']){
        header("Location:login.php");
    }
    $productController = new Product();

    if(!empty($_GET['action'])){
        switch($_GET['action']){
            case "add":
                $productById = $productController->getProductById($_GET['id']);
                $itemArray = array(
                    $productById[0]['id'] => array(
                        'id'=>$productById[0]['id'],
                        'name'=>$productById[0]['name'], 
                        'quantity'=>$_POST['quantity'],
                        'image'=>$productById[0]['image'],
                        'price'=>$productById[0]['price']
                        )
                    );
                if(!empty($_POST['quantity'])){
                    if(!empty($_SESSION['cart_item'])){
                        if(in_array($productById[0]['id'],array_keys($_SESSION['cart_item']))){
                            foreach($_SESSION['cart_item'] as $key => $value){
                                if($productById[0]['id'] == $value['id']){
                                    if(!empty($_SESSION['cart_item'][$key]['quantity'])){
                                        $_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];
                                    }
                                }
                            }
                        }
                        else {
                            $_SESSION['cart_item'] = array_merge($_SESSION['cart_item'],$itemArray);
                        }
                    }
                    else {
            
                        $_SESSION['cart_item'] = $itemArray;
                    }
                }
            break;
            case 'remove':
                if(!empty($_SESSION['cart_item'])){
                    foreach($_SESSION['cart_item'] as $key => $value){
                        if($_GET['id'] == $value['id']){
                            unset($_SESSION['cart_item'][$key]);
                        }
                        if(empty($_SESSION["cart_item"]))
						    unset($_SESSION["cart_item"]);
                    }
                }
            break;
            case "empty":
                unset($_SESSION['cart_item']);
            break;
        }
    }
?>
<?php 
    PageTemplate::template_header("Shopping Cart");
?>

<div id="shopping-cart">
    <div class="txt-heading">Shopping Cart</div>
    <?php 
    if (isset($_SESSION['cart_item'])){ ?>
        <a id="btnEmpty" href="orders.php" style="border: green 1px solid; color: green;">Place Order</a>
        <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
    <?php 
    }?>
    
    <?php
        if(isset($_SESSION['cart_item'])){
            $totalQuantity = 0;
            $totalPrice = 0;
    ?>
    <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
            <tr>
                <td style="text-align:left;">Product</td>
                <td style="text-align:left;" width="10%">Quantity</td>
                <td style="text-align:left;" width="10%">Unit Price</td>
                <td style="text-align:left;" width="10%">Price</td>
                <th style="text-align:center;" width="5%">Remove</th>
            </tr>
            <?php
                foreach($_SESSION['cart_item'] as $item){
                    $itemPrice = $item['quantity'] * $item['price'];
                    ?>
                    <tr>
                        <td><img src="<?php echo "..\images\\".$item['image'];?>" class="cart-item-image"><?php echo $item['name'];?></td>
                        <td style="text-align:right;"><?php echo $item['quantity'];?></td>
                        <td style="text-align:right;"><?php echo $item['price'];?></td>
                        <td style="text-align:right;"><?php echo $itemPrice;?></td>
                        <td style="text-align:center;">
                            <a href="cart.php?action=remove&id=<?php echo $item['id'];?>" class="btnRemoveAction">
                                <img src="..\images\deleteicon.jpg" alt="remove Item" width="30" height="30"/>
                            </a>
                        </td>
                    </tr>
                    <?php
                        $totalQuantity += $item['quantity'];
                        $totalPrice += $itemPrice;
                }
                ?>
            <tr>
                <td colspan="1" align="right"><strong>Total</strong></td>
                <td colspan="1" align="right"><strong><?php echo $totalQuantity;?></strong></td>
                <td colspan="2" align="right"><strong><?php echo $totalPrice;?></strong></td>
            </tr>
        </tbody>
    </table>
    <?php 
            $_SESSION['orderPrice'] = $totalPrice;
            $_SESSION['orderQuantity'] = $totalQuantity;
        }
        else {
        ?>
            <div class="no-records">No items in your cart</div>
    <?php
         }
        ?>
</div>

<?php 
PageTemplate::template_footer();
?>