<?php

class Post{
    private $name;

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo 'Setting'.$name.' to <strong>'.$value.'</strong>';
        $this->name;

    }
    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

}
$post= new Post();
$post->name='Testing';
echo $post->name;