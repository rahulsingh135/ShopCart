<?php 
require "../../db_connection/db_con.php";

$id = $_GET["id"];


$query = "DELETE FROM user_table WHERE user_id = $id";

$istrue = mysqli_query($con,$query);

if ($istrue){
    header("Location:../cus_table.php");
    die();
}
else {
    echo "something went wrong";
}











?>