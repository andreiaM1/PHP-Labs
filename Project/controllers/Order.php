<?php
    require_once("DatabaseController.php");
    class Order extends DatabaseController {
        
        function getAllOrders(){
            $query = "SELECT   * 
                      FROM     porder 
                      ORDER BY id DESC";
            $orders = $this->getResult($query);
            return $orders;
        }

        function getOrdersByUser($id_user){
            $query = "SELECT   * 
                      FROM     porder 
                      WHERE    id_user = ?
                      ORDER BY id DESC";
             $params =  array(
                array(
                    "param_type" => "i",
                    "param_value" => $id_user
                )
            );
            $orders = $this->getResult($query, $params);
            return $orders;

        }

        function addOrder($id_user, $order_date, $price, $quantity, $status){
            $query = "INSERT INTO porder(id_user, order_date, price, quantity, status)
                      VALUES (?,?,?,?,?)";
            $params =  array(
                array(
                    "param_type" => "i",
                    "param_value" => $id_user
                ),
                array(
                    "param_type" => "s",
                    "param_value" => $order_date
                ),
                array(
                    "param_type" => "d",
                    "param_value" => $price
                ),
                array(
                    "param_type" => "i",
                    "param_value" => $quantity
                ),
                array(
                    "param_type" => "s",
                    "param_value" => $status
                )
            );
            $this->update($query, $params);
        }

        function changeStatus($id_order, $status){
            $query = "UPDATE porder
                      SET status = ?
                      WHERE id = ?";
            $params =  array(
                array(
                    "param_type" => "s",
                    "param_value" => $status
                ),
                array(
                    "param_type" => "i",
                    "param_value" => $id_order
                )
            );
            $this->update($query, $params);
        }
    }
?>