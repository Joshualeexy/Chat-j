<?php 
Class Validator{
public $email;
public $text;
public $password;
public $email_err;
public $text_err;
public $password_err;
public $date_err;
public $num;
public $num_err;


    function validateEmail($email)
    {
        $email = htmlspecialchars($email);

        if (empty($email)) {
            $this->email_err = 'Please fill in the email field correctly';
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $email;
            } else {
                $this->email_err = 'Please enter a valid email address';
            }
        }
        return $email;
    } 
    
    function validateText($text)
    {
        $text = htmlspecialchars($text);
        $text = stripslashes($text);

        if (empty($text)) {
            $this->text_err = 'Please fill in this field correctly';
        } else {
          return $text;

        }
    }


    function Validateint($num){
        $num = htmlspecialchars($num);
        if(empty($num)){
            $this->num_err = 'Please fill in this fields correctly';
        }
        else{
            if(!filter_var($num,  FILTER_VALIDATE_INT)){
                $this->num_err = 'please input a valid number';
            }else{
                return $num;
            }
        }
return $num;
    }


    public function validatePassword($password){
        //password Rules//
        //password must be at least 8 characters long
        //password must include a number
        //password must contain an upperCase and Lowercase character
        //password should not contain space
        $password = htmlspecialchars($password);
        if (empty($password)) {
        $this->password_err = "Please fill in the passsword field correctly";
    }
    else {
        if (!preg_match('~[0-9]+~',$password)) {
                $this->password_err = "password must contain a number";
            }
            else{
                if (strlen($password) < 8) {
                    $this->password_err = "password must be at least 8 characters long";
                }else{
                    if (str_contains($password, ' ')) {
                            $this->password_err = "Invalid character password should not contain space";

                        }else{
                            $password = htmlspecialchars($password);

                        }
                    }

                } 
            }
            
            
            return $password;

    }

}
