 <?php

   

    
 class Language{
     private $category;
     private $framework;

     public function setCut($a){
         $this->category = $a;

     }
     public function getCut(){
         return $this->category;
     }

     public function setFramework($b){
         $this->framework = $b;
     }
     public function getFramework(){
         return $this->framework;
     }

     public function __clone(){
        $length = new Language();
         $length->setFramework($this->framework);
         return $length;
     }
 }

 
 ?>

 <?php
//  namespace java\live;
    class Java2
    {



        public function __construct()
        {
            echo "I love java <br>";
        }
    }
 
 ?>