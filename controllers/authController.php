<?php
include 'models/authModel.php';
if (isset($_SESSION['reg'])) {
   $page_err = 'Registration was successfull proceed to login';
   $page_err_color = 'text-success';
}

if (isset($_POST['login'])) {
    $emailValidator = new Validator;
    $email = $emailValidator->validateEmail($_POST['email']);
    $email_err = $emailValidator->email_err;

    $passwordValidator = new Validator;
    $password = $passwordValidator->validatePassword($_POST['password']);
    $password_err = $passwordValidator->password_err;

    $user = new authModel;
    $Login = $user->Login($email, $password);
    $page_err = $user->page_err;
    $page_err_color = $user->page_err_color;
    if ($Login) {
        header("location:?v=chat");
    }
}

if (isset($_POST["register"])) {
    $user = new authModel;
    $emailValidator = new Validator;
    $email = $emailValidator->validateEmail($_POST['email']);
    $email_err = $emailValidator->email_err;

    $passwordValidator = new Validator;
    $password = $passwordValidator->validatePassword($_POST['password']);
    $password_err = $passwordValidator->password_err;

    $nameValidator = new Validator;
    $fname = $nameValidator->validateText($_POST['names']);
    $name_err = $nameValidator->text_err;

    $password = password_hash($password, PASSWORD_DEFAULT);
    $onlinestatus = $_POST["onlinestatus"];
    $rad = uniqid();
    $finame = $fname . $rad;
    $Upload = new method;
    $profilepic = $Upload->uploadFile($_FILES['profile_pic'], 'uploads', $finame);
    if(empty($email_err) && empty($name_err) && empty($password_err)){
    $register = $user->Register($fname, $email, $profilepic, $onlinestatus, $password);
    $page_err = $user->page_err;
    $page_err_color = $user->page_err_color;
    if ($register) {
        $_SESSION['reg'] = true;
        
        header("location:?v=login");
    }}
}
