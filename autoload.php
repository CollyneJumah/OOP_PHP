<?php
spl_autoload_register(function($class_name){
   include $class_name. '.php';
});


$tw= new two();
$test = new Test();
$test->testingClass();
$test->id;
$tw->add(23,43);
?>