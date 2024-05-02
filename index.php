<?php
$name = $email = $webSites = $number = $comment = $gender = "";
$errName = $errEmail = $errWebsites = $errNumber = $errComments   = $errGenders = "";

 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_REQUEST['name'])) {
        $errName = "<span style='color:red;'>*Name Is Required</span>";


    } else {
        $name = $_REQUEST['name'];
        echo "<span style='color:green;  '>Name :</span> <span>". $name;
        echo "<br>";

    }
    if(empty($_REQUEST['email'])){
        $errEmail = "<span style='color:red;  '>*Email Is Required</span>";
    }

     elseif(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
        $errEmail = "<span style='color:red;  '>* Invalid Email</span>";
     }
    else{
        $email = $_REQUEST['email'];
        echo "<span style='color:green;'>E-mail :</span>".$email;
        echo "<br>";
    }
    if(empty($_REQUEST['website'])){
        $errWebsites = "<span style='color:red;'>*Websites is Required</span>";
    } 
      elseif(!filter_var($_REQUEST['website'], FILTER_VALIDATE_URL)){
        $errWebsites = "<span>Invalid The Websites</span>";
      }
    else{
        $websites = $_REQUEST['website'];
        echo "<span style='color:green;'>websites :</span>" . $websites;
        echo "<br>";
    }
    if(empty($_REQUEST['number'])){
        $errNumber = "<span style='color:red;'>*Number Is Required</span>";
    }else{
        $number = $_REQUEST['number'];
        echo "<span style='color:green;'>Number : </span>" . $number;
        echo "<br>";

    }
    if(empty($_REQUEST['gender'])){
        $errGenders = "<span style='color:red;'>*gender Is Required</span>";
    }


   else{
        $genders = $_REQUEST['gender'];
        echo "<span style='color:green;'>Gender</span> :" . $genders;
        echo "<br>";
   }

if(empty($_REQUEST['comment'])){
        $errComments = "<span style='color:red;'>*Comments Is Required</span>";
}

    else{
        $comments = $_REQUEST['comment'];
        echo "<span style='color:green; font-size:20px;'>Comments :</span>: " . $comments;
    }
    
     
    

  



}


     
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>


<body>
    <h1 style="text-align: center;">PHP Form Validation</h1>
    <form action="  <?php echo $_SERVER['PHP_SELF']?>" method="post">
         
        <table>
            <tr>
                <td style="font-size: 20px;">Name:</td>
                <td><input style="padding: 10px;" type="text" placeholder="Name" name="name"><?php echo $errName?>   </td>
            </tr>
            <tr>
                <td style="font-size: 20px;">E-mail:</td>
                <td><input style="padding: 10px;" type="email" placeholder="Email" name="email"><?php echo $errEmail?> </td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Websites:</td>
                <td><input style="padding: 10px;" type="text" placeholder="Websites" name="website"> <?php echo $errWebsites?> </td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Number:</td>
                <td><input style="padding: 10px;" type="number" placeholder="Number" name="number"><?php echo $errNumber?> </td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Comments:</td>
                <td><textarea style="padding: 10px;" name="comment" id="" cols="25" rows="4"></textarea> <?php echo $errComments?> </td>
            </tr>
            <tr>
                <td style="font-size: 20px;">Gender:</td>
                <td>
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="male">Male
                   <?php echo $errGenders?>
                    
                       
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input style="padding: 12px;" type="submit" value="Submit"></td>
            </tr>
        </table>



    </form>


    <?php 

    trait Message{
        public function mes(){
            echo "My First Message <br>";
        }
    }

    trait Message2{
        public function mes2(){
            echo "MY Second message <br>";
        }
    }

    trait message3{
        public function message2(){
            echo "My Third message <br>";
        }
    }
    class myTrait{
        use Message, Message2, message3;
    }
    $a = new myTrait();
    $a->mes();
    $a->mes2();
    $a->message2()


    
    
    ?>

</body>

</html>