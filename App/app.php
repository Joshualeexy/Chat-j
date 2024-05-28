<?php
include "config.php";
$content = 'auth/login.php';
$title = 'Chat-j';

include "routes/route.php";
if ($content == 'auth/login.php' || $content == 'auth/register.php') {
    $header = 'includes/guestHeader.php';
}else{
    $header = 'includes/header.php';
}


include $header;
include $content;
include "includes/footer.php";
?>