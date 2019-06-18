<?php


class Database
{
private $host='localhost';
private $user='root';
private $pass='';
private $dbname='myBlog';

private $dbh;
private $error;
private $stmt;

public function __construct()
{
    //set dsn
    $dsn='mysql:host='.$this->host.';dbname='.$this->dbname;
    //set PDO options
    $options=array(
        PDO::ATTR_PERSISTENT =>true,
        PDO::ATTR_ERRMODE    =>PDO::ERRMODE_EXCEPTION
    );

    //create new pdo
    try{
        $this->dbh= new PDO($dsn, $this->user, $this->pass,$options);

    }catch (PDOException $e){
        $this->error=$e->getMessage();
    }
}

//Query function
public function query($query){
    $this->stmt= $this->dbh->prepare($query);

}
//binding data to check type
public function bind($param,$value,$type=NULL){
    if(is_null($type)){
        switch (true){
            case is_int($value):
                $type=PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type=PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type=PDO::PARAM_NULL;
                break;
            default:
                $type=PDO::PARAM_STR;
                break;
        }
    }
    //pass bind values
    $this->stmt->bindValue($param,$value,$type);
}

public function execute(){
    return $this->stmt->execute();
}

public function resultset(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
}
}