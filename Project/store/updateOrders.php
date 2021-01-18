<?php
    session_start();
    require_once("PageTemplate.php");
    require_once("..\controllers\Order.php");

    if(!$_SESSION['loggedin']){
        header("Location:login.php");
    }
    if($_SESSION['userType'] != "Admin"){
        header("Location:login.php");
    }

    PageTemplate::template_header("Orders");

    $orderController = new Order();

    if(!$_SESSION['loggedin'] or $_SESSION['userType'] == 'Client'){
        header("Location:login.php");
    }

    $orders = $orderController->getAllOrders();

    if(isset($_GET['action'])){
        switch($_GET['action']){
            case "cancel":
                $new_status = "Canceled";
                $orderController->changeStatus($_GET['id'], $new_status);
                header("Location:updateOrders.php");
            break;
            case "delivered":
                $new_status = "Delivered";
                $orderController->changeStatus($_GET['id'], $new_status);
                header("Location:updateOrders.php");
            break;
        }  
    }
?>

<div class="orders">
<table class="tbl-orders" cellpadding="10" cellspacing="1">
        <tbody>
            <th>
                <tr >
                <td  style="text-align:right;"  width="5%">Id</td>
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
                        <td style="text-align:right;"><a href="updateOrders.php?action=cancel&id=<?php echo $item['id'];?>" class="cancel-order">Cancel Order</a></td>
                        <td style="text-align:right;"><a href="updateOrders.php?action=delivered&id=<?php echo $item['id'];?>" class="mark-delivered">Mark Delivered</a></td>        
                    </tr>
                    <?php
                }
                ?>
        </tbody>
</table>
</div>

<?php
     PageTemplate::template_footer();
?>