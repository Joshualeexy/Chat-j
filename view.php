<?php
spl_autoload_register('myAutoLader');
function myAutoLader($className)
{
    $path = 'classes/';
    $ext = '.class.php';
    $fullpath = $path . $className . $ext;
    include $fullpath;
};
include "App/app.php"
?>