<?php
    session_start();
    require_once("PageTemplate.php");
    require_once("..\controllers\Order.php");

    PageTemplate::template_header("Orders");

    $orderController = new Order();

    if(!$_SESSION['loggedin']){
        header("Location:login.php");
    }
    else {
    
    $user_id = $_SESSION['id'];
    if(isset($_SESSION['orderPrice'], $_SESSION['orderQuantity'])){
        $price = $_SESSION['orderPrice'];
        $quantity =  $_SESSION['orderQuantity'];
        $date = date("Y/m/d");
        $status = "Ordered";
        $orderController->addOrder($user_id, $date, $price, $quantity, $status);
        ?><div class="success">New order was added</div><?php
        unset($_SESSION['orderPrice']);
        unset($_SESSION['orderQuantity']);
        unset($_SESSION['cart_item']);
    }
    unset($_SESSION['orderPrice']);
    unset($_SESSION['orderQuantity']);
    unset($_SESSION['cart_item']);
    $orders = $orderController->getOrdersByUser($user_id);
?>
<div class="orders">
<table class="tbl-orders" cellpadding="10" cellspacing="1">
        <tbody>
            <th>
                <tr >
                <td  style="text-align:right;"  width="5%">Order Id</td>
                <td style="text-align:right;" width="10%">Order Date</td>
                <td style="text-align:right;" width="10%">Items</td>
                <td style="text-align:right;" width="10%">Price</td>
                <td style="text-align:right;" width="5%">Status</td>
                </tr>
            </th>
            <?php
                foreach($orders as $item){
                    ?>
                    <tr>
                        <td style="text-align:right;"><?php echo $item['id'];?></td>
                        <td style="text-align:right;"><?php echo $item['order_date'];?></td>
                        <td style="text-align:right;"><?php echo $item['quantity'];?></td>
                        <td style="text-align:right;"><?php echo $item['price'];?></td>
                        <td style="text-align:right;"><?php echo $item['status'];?></td>
                        
                    </tr>
                    <?php
                }
                ?>
        </tbody>
</table>
</div>
<?php
    }
?>
<?php
     PageTemplate::template_footer();
?>