<?php 
// print_r($_POST);
// echo "<br><br>";
// print_r($_FILES);
$uploaded_path = "../../assets/images/pro_image/rahul.png"; 
$filename = $_FILES["file_input"];
move_uploaded_file($_FILES["file_input"]["tmp_name"], $uploaded_path);

    if(isset($_FILES["file_input"])) {
        header("location:../profile_setting.php");
        die();
    }
?>