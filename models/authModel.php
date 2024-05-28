<?php
include 'classes/database.class.php';
class authModel extends database
{
    public $page_err;
    public $page_err_color;
    public function Login($email, $pass)
    {
        
        $sql1 = "UPDATE tbl_users SET online_status = '1' WHERE email = '$email'";
        $sqlr = $this->connect()->query($sql1);
        $sql = "SELECT * FROM tbl_users WHERE email='$email'";
        $result = $this->connect()->query($sql);
        $result = $result->fetch(PDO::FETCH_OBJ);
        
        if ($result) {
            if (password_verify($pass,$result->password)) {
                $_SESSION['id'] = $result->id;
                $_SESSION['email'] = $result->email;
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $result->id;
                $_SESSION['onlinestatus'] = $result->online_status;
                $onlinestatus = $result->online_status;
                $id = $_SESSION["id"];
                return true;
            }else {
                $this->page_err = "Password is incorrect";
                $this->page_err_color = 'text-danger';
            }
        } else {
            $this->page_err = "Invalid Email or User does not exist";
            $this->page_err_color = 'text-danger';

        }
    }


    public function Register($name, $email, $path, $os, $pass)
    {
        $sql = "SELECT * FROM tbl_users WHERE email='$email'";
        $result = $this->connect()->query($sql);
        $result = $result->fetch(PDO::FETCH_OBJ);
        if ($result) {
            $this->page_err = 'Email already taken';
            $this->page_err_color = 'text-danger';

        } else {
            $sql = "INSERT INTO tbl_users (fname,email,password,online_status,profile_dirr)
            VALUES('$name','$email','$pass','$os','$path')";
            $result = $this->connect()->query($sql);
            if ($result) {
                
                return true;
            }
        }
    }
}


?>
