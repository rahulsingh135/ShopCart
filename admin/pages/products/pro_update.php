<?php
include "../../db_connection/db_con.php";
$id = $_POST["product_id"];
$product_name = $_POST["product_name"];
$product_catagory = $_POST["product_catagory"];
$product_brand = $_POST["product_brand"];
$product_quantity = $_POST["product_quantity"];
$product_price = $_POST["product_price"];
$product_s_price = $_POST["product_s_price"];
$product_description = $_POST["product_description"];
$product_cloth_fabric = $_POST["product_cloth_fabric"];

$product_update_query = "UPDATE `product_table` SET `product_name` = '$product_name', `product_catagory` = '$product_catagory', `product_brand` = '$product_brand', `product_quantity` = '$product_quantity', `product_price` = '$product_price', `product_s_price` = '$product_s_price', `product_description` = '$product_description', `product_cloth_fabric` = '$product_cloth_fabric' WHERE `product_id` = '$id'";

$product_update_query_result = mysqli_query($con, $product_update_query);
if ($product_update_query_result) {
    header("Location: ../pro_table.php");
}
else {
    echo("error");
}



?>