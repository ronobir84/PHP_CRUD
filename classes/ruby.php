<?php
 abstract class Ruby{
   abstract public function myRuby();
 }

 class myRuby extends Ruby{
    public function myRuby(){
        echo "ruby is good programming language";
    }
 }

$a = new myRuby();
$a->myRuby();
 

 



 


 




?>