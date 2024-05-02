<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array</title>
</head>
<style>
    .main-div1 {
        width: 900px;
        height: 500px;
        background-color: bisque;
        margin-left: auto;
        margin-right: auto;
        padding-left: 40px;
        padding-right: 40px;

    }

    .h1-main {
        font-size: 40px;
        text-align: center;
        text-decoration-line: underline;
    }

    .h3-min {
        font-size: 25px;
    }
</style>

<body>
    <div class="main-div1">
        <!-- <h2 class='h1-main'>PHP ARRAY</h2> -->
        <h2 class="h3-min">
            <?php
            // $color = array(
            //     "Black",
            //     "Width" ,
            //     "green" ,
            //     "pink"

            // );

            // shuffle($color);
            // print("<pre>");
            // print_r($color);
            // print("<pre>");





            ?>

            <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input name="image" type="file">
                <input value="Submit" type="submit">
                <input name="name" type="text">

            </form>
            <?php
            if (isset($_FILES['image'])) {
                $one = $_FILES['image']['name'];
                $tow = $_FILES['image']['tmp_name'];
                move_uploaded_file($tow, "images/" . $one);
                echo "Uploaded Successfully.";
            }
            ?>

            <?php
            $text = array("Ronobir", "Akash", "Priash", "Nhair");
            if (isset($_POST['name'])) {
                $one = $_POST['name'];
                if (in_array($one, $text)) {
                    echo "Text is exist";
                } else {
                    echo "Text is not Exist !!";
                    echo "<br>";
                }
            }


            $newText =    fopen("new.text", "w") or die("text is not found");
            $one = "Im Ronobir Das and web developer and expert Html Javascript PHP\n";


            fwrite($newText, $one);
            $newFile = fopen("new.text", "r") or die('text is not found');
            echo  fread($newFile, filesize("new.text"));
            fclose($newFile);


            ?>














        </h2>
    </div>
</body>

</html>