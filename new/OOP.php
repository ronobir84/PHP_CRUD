<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<style>
    .div-1 {
        width: 60%;
        height: 600px;
        background-color: bisque;
        padding-left: 30px;
        padding-right: 30px;
        margin-left: auto;
        margin-right: auto;

    }

    h1 {
        font-size: 40px;
        text-align: center;
        text-decoration: underline;

    }
</style>

<body>
    <div class="div-1">
        <h1>OOP PHP</h1>

        <h3>
            <?php
            include "functions.php";
             
             
            class  person{
                public $name;
                public $age;
                public function __construct($name, $age){
                    $this->name = $name;
                    $this->age = $age;

                }
                public function PersonDetails(){
                    echo "Person Name Is {$this->name} and Person Age Is {$this->age}";
                }
            }
            $personOne = new person("Ronobir Das", "17");
            $personOne->PersonDetails();
           
             



            ?>
        </h3>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            <table>
                <tr>
                    <td>Enter The First Number : </td>
                    <td><input type="number" name="num1"></td>
                </tr>
                <tr>
                    <td>Enter The Second Number : </td>
                    <td><input name="num2" type="number"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input name="calculation" type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>

        <?php 
        if(isset($_POST['calculation'])){
            $numOne = $_POST['num1'];
            $numTow = $_POST['num2'];
        }
        if(empty($numOne) or empty($numTow)){
            echo "<span style='color:red;'>filed Is must be empty</span>";
        }

        else{
            $summation = new Calculation;
            $summation->add($numOne, $numTow);
            $summation->sum($numOne, $numTow);
            $summation->num($numOne, $numTow);
            $summation->last($numOne, $numTow);
        }
         
         

        
       
        
        
        ?>
        <div>









</body>

</html>