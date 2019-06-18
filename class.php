<?php
class PersonalInformation{
    public $fname="Collins Jumah";
    public $id=23;
    public $county="Busia County";
    //function
    public function myData(){
        echo "My name is $this->fname";
        echo "I come from $this->county";
        echo "I am $this->id"." years old";
    }

    public function whileLoop(){
        $i=0;
        while($i<=10){
            echo "The numbers are:".$i."</br>";
            $i++;
        }
    }
    public function arrays(){
       $age= array(
            "Collins Jumah"=>25,
            "Mirriam Jumah"=>26,
            "Maurine Jumah"=>27,
            "Emmanuel Jumah"=>28,
            "Nancy Jumah"=>29,
            "Agness Jumah"=>30
        );
        foreach ($age as $name => $ages){
            echo "My name is ".$name.". I am ".$ages." years old.<br>";
        }
    }

    function greetings($name,$greeti){
        echo "Welcome ".$name. " hope u ".$greeti."<br>";
    }
    function condStatements(){
        $marks=59;
        if($marks>=70 && $marks<=100){
            $grade="Congratulations! You got first class owner.";
            echo $grade;

        }elseif ($marks>=60 && $marks<=69){
            $grade="Second Upper!";
            echo $grade;
        }elseif ($marks >=50 && $marks<=59){
            $grade="Second Lower";
            echo $grade;
        }elseif ($marks>=40 && $marks<=49){
            $grade="Pass.";
            echo $grade;
        }

        else{
            $grade="Fail!";
            echo $grade;
        }
    }
}

class Education extends PersonalInformation{

}


//instantiate
$obj= new Education();

echo $obj->myData();
echo $obj->whileLoop();
echo $obj->arrays();
echo $obj->greetings('Collins','Fine');
echo $obj->condStatements();

?>