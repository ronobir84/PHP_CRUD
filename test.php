<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>

<body>
    <h1 style="text-align: center;">PHP Date And Time</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">


        Name :<input style="padding:12px;" type="text" placeholder="Name" name="name">
        <br>
        Email :<input style="padding: 12px; margin-top: 10px;" type="email" placeholder="Email" name="email">
        <br>
        Password :<input style="padding: 12px; margin-top:10px;" type="password" placeholder="Password" name="password">
        <br>
        <input style="padding: 10px;" type="submit" value="Submit">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['name'];
        if (empty($name)) {
            echo "Name : " . "<span style='color:red;'>Name Is Required</span>";
            echo "<br>";
        } else {
            echo "Name : " . $name;
            echo "<br>";
        }
        $email = $_REQUEST['email'];
        if (empty($email)) {
            echo "Email:" . "<span style='color:red;'>email is required</span>";
            echo "<br>";
        } else {
            echo "Email : " . $email;
            echo "<br>";
        }
        $password = $_REQUEST['password'];
        if (empty($password)) {
            echo "Password : " . "<span style='color:red;'>Password is Required</span>"; 
            echo "<br>";
        } else {
            echo "Password : " . $password;
            echo "<br>";
        }
    }





    ?>

    <?php

    echo date("d-m-Y") . "<br>";
    echo date("D-M-Y") . "<br>";
    date_default_timezone_set("Asia/Dhaka");
    echo "Bangladesh Time : " . date("h-i-sa") . "<br>";

    echo date_default_timezone_get();

    ?>

    <h2>
        <?php echo "Our Years " . date('Y') ?>
    </h2>

      

    <?php
   $SecName = $_SESSION['name'] = "Ronobir";
    $SecEmail = $_SESSION['email'] = "priashdas84@gmail.com";
    echo "Name : " . $SecName;
    echo "<br>";
    echo "Email : " . $SecEmail;






    ?>

</body>

</html>