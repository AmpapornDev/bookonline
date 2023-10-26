<?php

session_start();
require('../../lib/conect_database.php');

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "select * from tb_user_admin where username = '".$user ."' and password = '".$pass."'";
$query = $mysqli->query($sql);
$count = $query->num_rows;

if($count > 0){

    $data = $query->fetch_assoc();

    $_SESSION["UserID"] = $data["id_user_admin"];
    $_SESSION["UserEmail"] = $data["username"];

    //echo $_SESSION["UserID"];
    //echo $_SESSION["UserEmail"];

    header("location:../../view/home/index.php");
    exit(0);

}else{

    header("location:../../view/admin_login/index.php");
    exit(0);

}






?>