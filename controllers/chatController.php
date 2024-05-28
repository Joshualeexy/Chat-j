   <?php
    if (isset($_GET['id'])) {
        $receiver = $_GET['id'];
        $_SESSION['receiver'] = $receiver;
        $receiverdetails = new method;
        $receiver_arr = $receiverdetails->getuser($receiver);
    } else {
        $pagemsg = 'Chat is empty start a chat by selcting a friend from the left bar';
    }
    if (isset($_POST['update_pic'])) {
        $email = $_SESSION['email'];
        $auid = $_SESSION['id'];
        $db = new database;
        $db = $db->connect();
        $upauthuser = new method;
        $audetail = $upauthuser->getuser($auid);
        $rad = uniqid();
        $finame = $audetail['fname'] . $rad;
        $newPath = new method;
        $profilepic = $newPath->uploadFile($_FILES['profile_pic'], 'uploads', $finame);
        $sql11 = "UPDATE tbl_users SET profile_dirr = '$profilepic' WHERE email = '$email'";
        $sqlr = $db->query($sql11);
        if ($sqlr) {
            header("location:?v=chat");
        }
    }

    if (isset($_POST['update_user_details'])) {
        $db = new database;
        $db = $db->connect();
        $semail = $_SESSION['email'];
        $email = htmlspecialchars($_POST['email']);
        $fname = htmlspecialchars($_POST['fname']);
        $password = htmlspecialchars($_POST['password']);
        $cpassword = htmlspecialchars($_POST['confirmpassword']);
        if (strlen($password >  5)) {
            if ($cpassword === $password) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "UPDATE tbl_users SET email = '$email', fname = '$fname', password = '$password' WHERE email = '$semail'";
                $uresult = $db->query($sql);
                if ($uresult) {
                    header("location:?v=chat");
                }
            }
        } else {
            $sql = "UPDATE tbl_users SET email = '$email', fname = '$fname' WHERE email = '$semail'";
            $uresult = $db->query($sql);
            if ($uresult) {
                header("location:?v=chat");
            }
        }
    }
    ?>
