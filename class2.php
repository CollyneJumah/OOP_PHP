<?php
class User{

    public $id=55;
    function __construct()
    {
        echo "Constructor runs as long as class is instantiated";
    }

    public function register(){
        echo "I am registered with id number ";
        echo $this->id;
    }

    public function login($username,$password){
        $this->auth($username,$password);
        echo 'I am logged in as '.$username." with password ".$password;
    }

    public function auth($username,$password){
        echo "you're authenticated user";
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Calling destructors.";
    }
}

$user= new User();
$user->register();
$user->login("Collins","1234");


?>
