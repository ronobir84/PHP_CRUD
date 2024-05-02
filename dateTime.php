<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Date And Time</title>
</head>

<body>

    <h2>Today Time
        <?php date_default_timezone_set('Asia/Dhaka');
        echo date('h-i-sa') ?>
    </h2>
    <?php

    echo date('d-m-Y') . "<br>";
    echo date('D-M-Y') . "<br>";
    date_default_timezone_set('Asia/dhaka');
    echo "Bangladesh Time : " . date('h-i-sa') . "<br>";
    echo date_default_timezone_get();
    ?>
    <h3>&copy
        <?php echo date('Y') ?> In Our Day
    </h3>


    <?php

    $createFile = fopen("new.text", "w") or die("File Is Not Found!!");
    $one = "Ronobir Das\n";
    fwrite($createFile, $one);
    $tow = "im web developer\n";
    fwrite($createFile, $tow );

    $third = "and HTML CSS javascript React PHP\n";
    fwrite($createFile, $third);
    $four = "IM Mern Stack Developer and learning PHP\n";
    fwrite($createFile, $four);
    fclose($createFile);

    



    $ourFile = fopen("new.text", "r") or die("text is found!");
    echo fread($ourFile, filesize("new.text"));
    fclose($ourFile);
    if(isset($_POST['text'])){
         
    }
     

    ?>


 
     






</body>

</html>