<?php 

 class Person{
    public $name = "Ronobir";
    public $age = "20";
    public $skill = "Programer";

    private $email = "priashdas84@gmail.com"; 
    protected $password = "1234";

    public function myPer(){
        foreach($this as $key=>$value){
            echo "<pre>";
            echo "$key=>$value";
            echo "</pre>";
        }
    }
 }




?>