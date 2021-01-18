<?php
require_once "DatabaseController.php";

class Product extends DatabaseController {
    
    function getAllCategories(){
        $query = "SELECT * FROM product_category";
        $categories = $this->getResult($query);
        return $categories;
    }

    function getAllProducts(){
        $query = "SELECT * from product";
        $products = $this->getResult($query);
        return $products;
    }

    function getProductById($product_id){
        $query = "SELECT * 
                  FROM   product
                  WHERE  product.id = ?";
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            )
        );
        $products = $this->getResult($query,$params);
        return $products;
    }

    function getProductsByCategory($category_id){
        $query = "SELECT * 
                  FROM   product
                  WHERE  product.category_id = ?";
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $category_id
            )
        );
        $products = $this->getResult($query,$params);
        return $products;
    }

    function updateProductById($product_id, $name, $image, $price, $description){
        $query = "UPDATE product
                  SET    name = ?,
                         image = ?,
                         price = ?,
                         description = ?
                  WHERE  product.id = ?";
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $name
            ),
            array(
                "param_type" => "s",
                "param_value" => $image
            ),
            array(
                "param_type" => "s",
                "param_value" => $price
            ),
            array(
                "param_type" => "s",
                "param_value" => $description
            ),
            array(
                "param_type" => "i",
                "param_value" => $product_id
            )
        );
        $this->update($query, $params);
    }

    function addProduct($category_id, $name, $image, $price, $description){
        $query = "INSERT INTO  product(category_id, name, image, price, description)
                  VALUES (?,?,?,?,?)";
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $category_id
            ),
            array(
                "param_type" => "s",
                "param_value" => $name
            ),
            array(
                "param_type" => "s",
                "param_value" => $image
            ),
            array(
                "param_type" => "s",
                "param_value" => $price
            ),
            array(
                "param_type" => "s",
                "param_value" => $description
            )
        );
        $this->update($query, $params);
    }

    function deleteProductById($product_id){
        $query = "DELETE FROM product
                  WHERE id = ?";
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            )
        );
        $this->update($query, $params);
    }
}