<?php
include "./partials/header.php"
?>

<?php

include "db_conn.php";
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $statas = $_POST['statas'];
    $description = $_POST['description'];
    $sql = "UPDATE `cruds` SET `id`= NULL,`title`='$title',`statas`='$statas',`description`='$description',`crudDate`= 'CURRENT_TIMESTAMP' WHERE id = $id";

    $result = mysqli_query($db, $sql);
    if ($result) {
        header("Location: " . BASE_URL . "index.php?msg");
    } else {
        echo "Failed: " . mysqli_error($db);
    }
}
?>



<div class="w-[90%] h-[400px] bg-[#E8E8E8] mx-auto mt-20">
    <a class="duration-500" href="index.php">
        <button class="cursor-pointer duration-200 hover:scale-75 active:scale-75 absolute ml-[85px] mt-6" title="Go Back">
            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="60px" viewBox="0 0 24 24" class="stroke-purple-500">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M11 6L5 12M5 12L11 18M5 12H19"></path>
            </svg>
        </button>
    </a>
    <table class="w-5/6 mx-auto relative top-28  text-sm    text-blue-100 dark:text-blue-100">
        <thead class="text-xs text-white  bg-blue-600 border-b border-blue-400 dark:text-white  ">
            <tr>
                <th scope="col" class=" text-center text-lg text-slate-50 font-semibold bg-blue-500 py-4">
                    Id
                </th>
                <th scope="col" class=" text-center text-lg text-slate-50 font-semibold py-4">
                    Title
                </th>
                <th scope="col" class="text-center text-lg text-slate-50 font-semibold bg-blue-500 py-4">
                    Stats
                </th>
                <th scope="col" class="text-center text-lg text-slate-50 font-semibold py-4">
                    Description
                </th>
                <th scope="col" class="text-center text-lg text-slate-50 font-semibold bg-blue-500 py-4">
                    Date Time
                </th>

            </tr>
        </thead>
        <tbody>
            <?php
            include "db_conn.php";
            $sql = "SELECT * FROM `cruds` WHERE id  = $id LIMIT 1";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result);

            ?>

            <tr class="bg-blue-600 border-b border-blue-400">
                <th scope="row" class="px-6 py-6 font-medium bg-blue-500 text-gray-200 text-[16px] whitespace-nowrap dark:text-blue-100">
                    <?php echo $row['id'] ?>
                </th>
                <td class="text-center text-[16px] font-medium text-gray-200">
                    <?php echo $row['title'] ?>
                </td>
                <td class="text-center bg-blue-500 font-medium text-gray-200">
                    <!-- <?php echo $row['statas'] ?> -->
                    <?php 
                    if($row['statas'] == 'Active'){
                        echo "<span class='text-[#1F7153]'>Active</span>";
                    }elseif($row['statas'] == 'Directive'){
                        echo "<span class='text-[#DC2626]'>Directive</span>";
                    }
                    ?>

                </td>
                <td class=" text-center font-medium text-gray-200">
                    <?php echo $row['description'] ?>
                </td>
                <td class=" text-center bg-blue-500 font-medium text-gray-200">
                    <?php echo $row["crudDate"] ?>
                </td>

            </tr>





        </tbody>
    </table>
</div>