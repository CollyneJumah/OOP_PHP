<?php
class User{
    public $username;
    public static $minPassLength=5;

    public static function validateFunction($password)
    {
        if (strlen($password) >= self::$minPassLength) {
            return true;
        } else {
            return false;
        }

    }

}

//no instantiation , use scope resolution operator to call the properties and the methods.
$password="1234";
if(User::validateFunction($password)){
    echo 'password valid';
}else{
    echo 'invalid password';
}

//to access properties from outside class

echo User::$minPassLength;
?>
