<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Last PHP</title>
</head>

<body>
    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <input type="file" name="image">
        <input type="submit" value="Submit">
    </form>
 
    <?php
    if (isset($_FILES['image'])) {
        $firstItem = $_FILES['image']['name'];
        $ourFile = $_FILES['image']['tmp_name'];
        move_uploaded_file($ourFile, "images/" . $firstItem);
        echo "<h3>image uploaded successfully.</h3>";
    }
    ?>

    <?php
    $newFile = fopen("new.text", "w") or die('file is not found');
    $one = "<h4>       . Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero deserunt facere cumque delectus neque, aliquid debitis et sint aspernatur dolorum aliquam provident quos, beatae pariatur? Unde optio qui at earum.\n</h4>";

    fwrite($newFile, $one);

    $newText = fopen("new.text", "r") or die("text could be uploaded.");
    echo fread($newText, filesize("new.text"));
    fclose($newText);
    

    ?>

    <?php
    function numCheck($num)
    {
        if ($num > 5) {
            throw new Exception("you have ");
        }
        return true;
    }
    try {
        numCheck(0);
        echo "Yes You Have done";
    } catch (Exception $e) {
        echo "Error : " . $e->getMessage();
    }


    date_default_timezone_set('Asia/dhaka');
    echo "Bangladesh Time : " . date("h-i-sa");




    ?>

    <h2>&copy
        <?php echo date("Y") ?> This Is years
    </h2>
    <?php
    require "new.php";
    require "new.php"


    ?>



</body>

</html>