<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>con and des</title>
</head>

<body>

    <?php
    include "../project./new/OOP.php"

    ?>
    <h4>
        <?php
        class userDetails
        {
            public $name;
            public $age;
            const NAME = "Ronobir Das";
            public static $userId = "90438910";
             protected $the = "developer";
  
            public static function display()
            {
                echo "Person Name Is " . userDetails::NAME . "<br>";
                echo "Person Id Is " . self::$userId;
            }

            public function __construct($userName, $userAge)
            {
                $this->name = $userName;
                $this->age = $userAge;
            }

            public function UserIn()
            {
                echo "User Name Is {$this->name} and User Age Is {$this->age} ";
            }
            public function __destruct()
            {
                unset($this->name);
                unset($this->age);
            }
            public function second(){
                echo "Person Name Is {$this->name} and person number Is {$this->age}";

            } 
             
        }

        class Admin extends userDetails{
            public $level;
            public function second()
            {
                echo "Person Name Is {$this->name} and person number Is {$this->age} and admin {$this->level}" . "<br>";

                echo $this->the;
            }


        }
         
  
        $name = "Ronobir Das Priash";
        $age = "19";
        $user = new userDetails($name, $age);
        $user->UserIn();
        echo "<br>";
        userDetails::display();
        echo "<br>";
        $userName = "Ronobir Das";
        $userId = "901270";

        $personName = "Ronobir Das";
        $personNumber = "01314909062";
        
 
        $ad = new Admin($personName, $personNumber);
        echo "<br>";
        $ad->level = "Administer";
        $ad->second();
        echo "<br>";

        if($ad instanceof userDetails){
            echo "Inhered";
        }
 
        class program{
            public $age = "20";
            private $name = "Ronobir Das";
            public function myClass(){
                echo $this->age . "Inside Class" . "<br>";
                echo $this->name;
            }
        }

         

        $new = new program;
        
        $new->myClass();
 


        ?>
        

        <?php 
        

         
        
        ?>
    </h4>






</body>

</html>