<?php

include "../db_conn.php";

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $statas = $_POST['statas'];
    $description = $_POST['description'];
    $sql = "INSERT INTO `cruds`(`id`, `title`, `statas`, `description`, `crudDate`) VALUES (NULL,'$title', '$statas', '$description', CURRENT_TIMESTAMP)";

    $result = mysqli_query($db, $sql);
    if ($result) {
        header("Location: ". BASE_URL . "index.php?msg=New record created successfully.");
    } else {
        echo "Failed: " . mysqli_error($db);
    }
}
?>