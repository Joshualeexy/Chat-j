<?php
if (empty($_SESSION)) {
    header("location:?v=login");
} 
$id = $_SESSION['id'];
$con = mysqli_connect("localhost", "root", "", "cat-j");

$sql = "UPDATE tbl_users SET online_status = '0' WHERE id = '$id' ";
mysqli_query($con, $sql);
session_destroy();
echo "<script> window.location.href = '?v=login' </script>";


?>