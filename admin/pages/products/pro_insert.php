<?php


$product_name = $_POST["product_name"];
$product_catagory = $_POST["product_catagory"];
$product_brand = $_POST["product_brand"];
$product_quantity = $_POST["product_quantity"];
$product_price = $_POST["product_price"];
$product_s_price = $_POST["product_s_price"];
$product_description = $_POST["product_description"];
$product_cloth_fabric = $_POST["product_cloth_fabric"];
$product_image = $_FILES["product_image"];

$img = $product_image["name"];
move_uploaded_file($product_image["tmp_name"], "../../../image/$img");

include "../../db_connection/db_con.php";

$product_insert_query = "INSERT INTO `shopkart`.`product_table` (`product_name`, `product_catagory`, `product_brand`, `product_quantity`, `product_price`, `product_s_price`, `product_description`, `product_cloth_fabric`, `product_image`) VALUES ('$product_name', '$product_catagory', '$product_brand', '$product_quantity', '$product_price', '$product_s_price', '$product_description', '$product_cloth_fabric', '$img')";

$product_insert_query_result = mysqli_query($con, $product_insert_query);
if ($product_insert_query_result) {
    header("Location: ../pro_table.php");
} else {
    echo ("error");
}
