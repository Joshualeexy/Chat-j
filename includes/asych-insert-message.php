<?php

spl_autoload_register('myAutoLader');
function myAutoLader($className)
{
    $path = '../classes/';
    $ext = '.class.php';
    $fullpath = $path . $className . $ext;
    include $fullpath;
};
$db = new database;
$db = $db->connect();
session_start();
$sender = $_SESSION['id'];
$receiver = $_POST['receiver'];

if (isset($_POST['submit_message'])) {
    $message = $_POST['message'];

    $msg_query = "INSERT INTO messages(sender,receiver,message) VALUES('$sender','$receiver','$message')";
    $result = $db->query($msg_query);
};

?>
