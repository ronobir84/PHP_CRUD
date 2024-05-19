<?php
include "./db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `cruds` WHERE id = $id";
$result = mysqli_query($db, $sql);
if($result){
    header("Location: index.php?msg=Delete Successful");
}else{
    echo "Failed" . mysqli_error($conn);
}

?>