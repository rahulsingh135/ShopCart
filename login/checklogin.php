<?php session_start();
include("../db_con.php");


$username=$_POST["username"];
$password=$_POST["password"];

$logUser="SELECT * from user_table where user_name='$username' and user_password='$password'";
$num = mysqli_query($con,$logUser);
if(mysqli_num_rows($num)==1){
  $_SESSION["isLogin"]=true;
  echo json_encode( "1");
}
else{
echo json_encode("loginfail");
}



// if(mysqli_num_rows($logUse)==0)
// {
//     header("location:./login/login.php?resmsg=1");
// }
// else 
// {
//     $row=mysqli_fetch_array($logUser);
//     if($row["user_password"]==$password) {
//       header("location:./index.php");
//     }
    
//     else 
//     {
//         header("location:./login/login.php?resmsg=2");
//     }
// }

?>