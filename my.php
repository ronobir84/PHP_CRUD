<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PHP </title>
</head>
<style>
    .div-1 {
        width: 900px;
        height: 730px;
        background-color: bisque;
        border: 4px solid grey;
        margin-left: auto;
        margin-right: auto;
        padding-left: 20px;
        padding-right: 20px;

    }
</style>

<body>
    <div class="div-1">


        <h3>
            <?php



            abstract class Laptops
            {
                public $name;
                public $a;
                abstract public function myLaptop();
            }
            class phone  extends Laptops
            {
                public function myLaptop()
                {
                    // echo "My $this->name is good laptop <br>";
                }
            }
            if (class_exists("Laptops")) {
                $x = new phone();
                $x->name = "Dell";
                if (method_exists($x, "myLaptop")) {
                    // $x->myLaptop();
                } else {
                    // echo "Method IS not Exist <br>";
                }
            } else {
                // echo "Class IS not Exist. <br>";
            }
            // include "../project/classes/Ruby.php";
            // include "../project/classes/java.php";
            // include "../project/classes/php.php";

            // spl_autoload_register(function ($class_name) {
            //     include "classes/" . $class_name . ".php";
            // });





            ?>
            <?php





            //  class childPhp extends Php5{
            //     public static function ourPhp(){
            //         return __CLASS__;

            //     }

            //  }

            // $a = new Php();
            // $a->framework();
            // $phpChild = new childPhp();
            // $phpChild->framework();





            // $cal = new Calculation;
            // $sum = array(
            //     array("Number of One" , 30, 30),
            //     array("Number of two", 20, 20)
            // );
            // $cal->myCal($sum);

            // $php = new Php;
            // new Java($php);

            // $person = new Person;
            // foreach($person as $key=>$value){
            //     echo "<pre>";
            //     echo "$key=>$value";
            //     echo "</pre>";
            // }
            // $person->myPer();


            // include "../project/classes/ruby.php";
            // include "../project/classes/Language1.php";

            // use ronobir\Ruby as ro;
            // use html\ronobir\Language1 as la;

            // use function html\ronobir\coding;

            // new ro();

            // new la();
            // echo HTML;
            // echo html\ronobir\CSS;
            // coding()
            
//             include "../project/classes/Language1.php";
//             include "../project/classes/ruby.php";
//             use ronobir\Language2 as lan;
//             use ruby\live\name\Ruby as ru;

// use function ronobir\ourBook;
// use function ruby\live\name\code;

//             new lan();
//             new ru();
//             echo Programmer;
//             echo Language;
//             echo \ruby\live\name\HTML;
//             echo ronobir\Book;
//             ourBook();
            // code();















            ?>


<?php
// $user = new User();
// $mes = $user->getMessage();
// switch ($mes) {
//     case 'email':
//         $objMes = new SendEmail();
//         break;
//     case "message";
//         $objMes = new SendMessage();
//         break;
//     case "fex";
//     $objMes = new SendFex();
//         break;
    
     
// }

// $objMes->notification();




 

?>


<?php


// $data->setDriver("driver");
// $data->setLink("User", "password", "db", "host");

include "Program/Database.php";

include "Program/Product.php";
include "Program/Posts.php";
 

spl_autoload_register(function($class_name){
    include "Program/" . $class_name . ".php";
});


// $data = new Category();
// $data->connect();
// $data->query();
// $data->insert();

// $a = new Product();
// $a->connect();
// $a->query();
// $a->insert();
$post = new Posts();
$comment = new Comment();
// $post->filter();
// $comment->filter();

if ($BBCodeEnable == false && $EmoticonEnabled ==false) {
    $postContend = $post->getContend();
    $commentContend = $comment->getContend();
     
}elseif($BBCodeEnable == true && $EmoticonEnabled == false){
    $bb = new BBCodeParser($post);
    $postContend = $bb->getContend();

    $bb = new BBCodeParser($comment);
    $commentContend = $bb->getContend();

}elseif($BBCodeEnable == true && $EmoticonEnabled == false){
    $em = new Emoticon($post);
    $commentContend = $em->getContend();

    $em = new Emoticon($comment);
    $commentContend = $em->getContend(); 
}
    









 


 

?>







        </h3>
    </div>
</body>

</html>