<?php

require "../../db_connection/db_con.php";

$u_name = $_POST["name"];
$u_mail = $_POST["mail"];
$u_number = $_POST["number"];
$u_address = $_POST["address"];
$u_birthday = $_POST["birthday"];

$user_update_query ="UPDATE user_table set user_name ='$u_name' , user_email ='$u_mail' , user_phone ='$u_number' . user_address = '$u_address'. user_birthday ='$u_birthday' WHERE user_id =  " ;

$user_update_query_result = mysqli_query($con,$user_update_query);
if($user_update_query_result){
    header("Location : ./cus_details.php");
}else {
    echo "not working";
}


?>