<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProductDB {

    public static function getProducts($productid) {
        $db = Database::getDB();
        $query = 'SELECT * FROM productsTable
                  WHERE productid = :productid';
        $statement = $db->prepare($query);
        $statement->bindValue(":productid", $productid);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        $product = new Product(
                $row['name'], $row['description'], $row['qty'], $row['price']);

        $product->setproductid($row['productid']);
        return $product;
    }

    public static function getAllProducts() {
        $db = Database::getDB();
        $query = 'SELECT * FROM productsTable
                  ORDER BY productid';
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        foreach ($rows as $row) {
            $product = new Product(
                    $row['name'], $row['description'], $row['qty'], $row['price']);
            $product->setproductid($row['productid']);
            $products[] = $product;
        }
        return $products;
    }

    public static function addproduct($product) {
        $db = Database::getDB();

        $name = $product->getname();
        $description = $product->getdescription();
        $qty = $product->getqty();
        $price = $product->getprice();

        $query = 'INSERT INTO productsTable
                     (name,description,qty,price)
                  VALUES
                     (:name, :description, :qty, :price)';
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':qty', $qty);
        $statement->bindValue(':price', $price);

        $statement->execute();
        $statement->closeCursor();
    }

    public static function deleteProduct($product_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM productsTable
                  WHERE productid = :product_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':product_id', $product_id);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function updateProduct($productid, $name, $description, $qty, $price) {
        $db = Database::getDB();
        $query = 'UPDATE productsTable

                 SET productid = :productid,
                 name = :name,
                 description = :description,
                 qty = :qty,
                 price = :price
                  WHERE productid = :productid';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':productid', $productid);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':qty', $qty);
            $statement->bindValue(':price', $price);
            $row_count = $statement->execute();
            $statement->closeCursor();
            return $row_count;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            display_db_error($error_message);
        }
    }

    public static function searchProduct($value) {
        $db = Database::getDB();
        $query = "SELECT * FROM productsTable
                WHERE name LIKE '%" . $value . "%'
                    ORDER BY name, description";

        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        if (empty($rows)) {
            return '';
        }


        foreach ($rows as $row) {
            $product = new Product(
                    $row['name'], $row['description'], $row['qty'], $row['price']);
            $product->setproductid($row['productid']);
            $products[] = $product;
        }
        return $products;
    }

}
