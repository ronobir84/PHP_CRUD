<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Interface</title>
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
            interface School
            {
                public function mySchool();
            }
            interface Collage
            {
                public function myCollage();
            }
            interface Veracity
            {
                public function myVeracity();
            }

            class Teacher implements School, Collage, Veracity
            {
                public function  __construct()
                {
                    $this->mySchool();
                    $this->myCollage();
                    $this->myVeracity();
                }
                public function mySchool()
                {
                    echo "Im a school Teacher" . "<br>";
                }
                public function myCollage()
                {
                    echo "Im a Collage Teacher" . "<br>";
                }
                public function myVeracity()
                {
                    echo "Im a Veracity Teacher" . "<br>";
                }
            }


            class Student implements School, Collage, Veracity  
            {
                public function __construct()
                {
                    $this->mySchool();
                    $this->myCollage();
                    $this->myVeracity();
                } 
                public function mySchool()
                {
                    echo "Im a School Student" . "<br>";
                }
                public function myCollage()
                {
                    echo "Im a Collage Student" . "<br>";
                }
                public function myVeracity()
                {
                    echo "Im a Veracity Student" . "<br>";
                }
            }

            // $teacher = new Teacher();
            // $student = new Student();







            ?>


            <?php
            abstract class Students
            {
                public $name;
                public $age;
                public function details()
                {
                    echo $this->name . " is " . $this->age . " Years Old " . "<br>";
                }
                abstract public function Schools();
            }
            class Boy extends Students
            {
                public function describe()
                {
                    echo  $this->details() . "And Im a  High School Student" . "<br>";
                }
                public function Schools()
                {
                    echo "I Like to Read Stroy Book";
                }
            }
            // $a = new  Boy();
            // $a->name = "Ronobir";
            // $a->age = "20";
            // $a->describe();
            // $a->Schools()
            ?>
            <?php
            class Name
            {
                public function describe()
                {
                    echo "My Name Is Ronobir Das" . "<br>";
                }
                public function __get($name)
                {
                    echo "$name Is exist <br>";
                }
                public function __set($name, $value)
                { 
                     
                    echo "we set $name->$value <br>";
                }
                public function __call($method, $value)
                {
                    echo "there is <b>$method</b> and exist " . implode(" ", $value) . "<br>";
                }
            }
            if (class_exists("Name")) {
                $na = new Name();
                if (method_exists($na, 'describe')) {
                    $na->describe();
                } else {
                    echo "Method is not exist <br>";
                }
                $na->Ronobir;
                $na->age = "20";
                $na->notExistMethod("1", "3", "5", "6");
            } else {
                echo "Class Is not Exist" . "<br>";
            }






            ?>


            <?php
            class black1
            {
                public function  myBlack()
                {
                    echo "Black IS Exist <br>";
                }
            }
            if (class_exists("black")) {
                $a = new black1();
                if (method_exists($a, 'myBlack')) {
                    $a->myBlack();
                } else {
                    echo "Method is not found";
                }
            } else {
                echo "Class in not exist <br>";
            }
            include "../classes/Php.php"



            ?>















        </h3>

    </div>

</body>

</html>