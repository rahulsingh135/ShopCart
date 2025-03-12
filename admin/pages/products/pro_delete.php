<?php 
require "../../db_connection/db_con.php";

$id = $_GET["id"];


$query = "DELETE FROM product_table WHERE product_id = $id";

$istrue = mysqli_query($con,$query);

if ($istrue){
    header("Location:../pro_table.php");
    die();
}
else {
    echo "something went wrong";
}











?>