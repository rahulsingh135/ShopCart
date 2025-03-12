<?php 
require "../../db_connection/db_con.php";

$id = $_POST["id"];


$query = "SELECT * FROM product_table WHERE product_id = $id";

$istrue = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($istrue);

echo json_encode($data);


?>