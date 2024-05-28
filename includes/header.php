<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= APP_URL ?>asset/js/jquery.js"></script>
    <link rel="stylesheet" href="<?= APP_URL ?>asset/css/main.css">
    <link rel="stylesheet" href="<?= APP_URL ?>asset/css/bootstrap.css">
    <link rel="stylesheet" href="<?= APP_URL ?>asset/css/all.css">
    <title><?= $title ?></title>
</head>
<header>
    <nav>
        <a href="#" class="logo"></a>
        <ul class="nav-links ">
            <ul>
                <li id="showhidesidebar"><i class="fa-solid fa-bars "></i></li>
            </ul>
            <ul id="activeusers">

            </ul>
            <ul>
                <li><i class="fa-solid fa-user " id="openprofilemodal"></i></li>

                <li><i class="fa-solid fa-user " id="closeprofilemodal" style="display:none;"></i></li>
            </ul>
            <div id="navfriends">
            </div>
        </ul>
    </nav>
</header>
<dialog class="profile_modal" id="profile_modal">
    <div class="profile-container">
        <div class="profile-pic">
            <div>
                <h2 class="heading">profile details</h2>
                <?php 
                $uid = $_SESSION['id'];
                $authUser = new method;
                $query111row = $authUser->getuser($uid);
                ?>
            </div>
            <img src="<?= $query111row['profile_dirr'] ?>" alt="" id="userpicpreview">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="user-pic" class="user-pic">
                    <input type="file" name="profile_pic" id="user-pic" onchange="previewprofilepic(event)" hidden>
                    <i class="fa fa-upload upload-icon"></i>
                    Click to choose new picture
                </label>
                <button type="submit" name="update_pic" value="update"> Update</button>
            </form>
        </div>
        <div class="user-details">

            <form action="" method="POST">
                <label for=""> Full Name
                    <input type="text" value="<?= $query111row['fname'] ?>" name="fname">
                </label>
                <label for=""> Email
                    <input type="text" value="<?= $query111row['email'] ?>" name="email">
                </label>
                <label for=""> Password
                    <input type="text" value="" name="password" placeholder="Enter new password">
                </label>
                <label for=""> Confirm Password
                    <input type="text" value="" name="confirmpassword" placeholder="Confirm New Password" value=" ">
                </label>
                <button type="submit" name="update_user_details" value="update"> Update</button>
            </form>
        </div>
    </div>
</dialog>

<body>

    <main>
        <ul class="sidebar" id="sidebar">
            <li class="search-input bg-light"> <input type="text" placeholder="Search Friends"> </li>
            <div id="users">

            </div>
        </ul>