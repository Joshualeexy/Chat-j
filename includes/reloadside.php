<?php
spl_autoload_register('myAutoLader');
function myAutoLader($className)
{
    $path = '../classes/';
    $ext = '.class.php';
    $fullpath = $path . $className . $ext;
    include $fullpath;
};
error_reporting(0);

session_start();
$id = $_SESSION['id'];
$Users = new method;
$Users = $Users->getusers($id);



foreach ($Users as $row) {
    $rid = $row['id'];
    $sqlquery = "SELECT * FROM messages WHERE sender = '$id' AND receiver = '$rid' or receiver = '$id' and sender = '$rid' ORDER BY id desc";
    $db = new database;
    $lmsg = $db->connect()->query($sqlquery);
    $lmsg = $lmsg->fetch(PDO::FETCH_OBJ);

    $lmsgmessage = $lmsg->message;
    $lmsgmessage = substr($lmsgmessage, 0, 15);

    if ($row['online_status'] == 1) {
        $online_status = "online-status";
    } else {
        $online_status = "offline-status";
    }
    $name = explode(" ", $row["fname"],);
    $filedirr = $row["profile_dirr"];

    $fname = $name[0] ?>
    <a href="?v=chat&id=<?= $row['id'] ?>" style="text-decoration: none; " class="SIDEBAR-users">
        <div class="all-friends-div" id="allfriendsdiv">
            <div class="friend-pic"> <img src="<?= $filedirr ?>" alt="">
            </div>

            <div class="">
                <h6 class="users-list "> <?= $fname ?> <i class="fa-solid fa-circle <?= $online_status ?>"></i></h6>
                <small><?php if (isset($lmsgmessage)) {
                            echo $lmsgmessage;
                        } ?>...</small>
            </div>
        </div>
    </a>



<?php  }


?>