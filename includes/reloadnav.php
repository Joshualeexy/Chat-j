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
    $id = $_SESSION["id"];


    $sql7 = "SELECT SUM(online_status) FROM tbl_users WHERE id !='$id'";
    $results = $db->query($sql7);
    $no_of_active_users = $results->fetch(PDO::FETCH_ASSOC);

    $no_online_friends = $no_of_active_users["SUM(online_status)"];

    $sql6 = "SELECT * FROM tbl_users WHERE id = '$id'";
    $result6 =     $results = $db->query($sql6);

    $row6 = $result6->fetch(PDO::FETCH_ASSOC);
    if ($row6['mode'] == 'dark') {
        
        $textcolor = "white";
        $bgcolor = "black";
        $mode = 'Rgba';
    } elseif ($row6['mode'] == 'light') {
        $textcolor = "green";
        $bgcolor = "blue";
        $mode = 'dark';
    }

    ?>
 <style>
     :root {
         --text-color: <?= $textcolor ?>;
         --bg-color: <?= $bgcolor ?>;

     }
 </style>

 <li><a>Friends Online (<?= $no_online_friends ?>)</a></li>
 <li><a href="?v=logout">logout</a></li>