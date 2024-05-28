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

$select_query = "SELECT * FROM messages WHERE sender = '$sender' AND receiver = '$receiver' or receiver = $sender and sender = '$receiver'";

$message_result = $db->query($select_query);
$message_arra = $message_result->fetchAll(PDO::FETCH_ASSOC);

foreach ($message_arra as $message_arr) {
    $full_date_time = $message_arr['date'];
    $full_date_time_array = explode(' ', $full_date_time);
    $time = $full_date_time_array[1];
?>

    <?php
    if ($message_arr['sender'] == $receiver) { ?>
        <p class="sender"> <span><?= $message_arr['message'] ?></span> <small><?= $time ?></small>
        </p>

    <?php } ?>
    <?php
    if ($message_arr['sender'] == $sender) { ?>
        <p class="receiver"> <span><?= $message_arr['message'] ?></span>

            <small><?= $time ?></small>
        </p>

    <?php } ?>



<?php  } ?>