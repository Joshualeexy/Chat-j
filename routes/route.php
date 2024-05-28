<?php
if (isset($_GET['v'])) {
    $view = $_GET['v'];



    switch ($view) {
        case 'login':
            $content = 'auth/login.php';
            $title = 'Login ' . APP_NAME;
            break;

        case 'logout':
            $content = 'auth/logout.php';
            $title = 'logout ' . APP_NAME;
            break;

        case 'register':
            $content = 'auth/register.php';
            $title = 'Register ' . APP_NAME;
            break;

        case 'chat':
            if (isset($_GET['id'])) {

                $uid = $_GET['id'];
                $reUser = new method;
                $reuser = $reUser->getuser($uid);
                $title = 'Message |  ' . $reuser['fname'];
            } else {
                $title = 'Message';
            }
            $content = 'views/index.php';

            break;


        default:
            $content = 'auth/login.php';
            break;
    }
}
