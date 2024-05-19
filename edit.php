<?php
// include "./endpoints/add.php";


?>
<?php
 
include "./db_conn.php";
$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $statas = $_POST['statas'];
    $description = $_POST['description'];
    $sql = "UPDATE `cruds` SET `title`='$title',`statas`='$statas',`description`='$description'  WHERE id = $id ";

    $result = mysqli_query($db, $sql);
    if ($result) {
        header("Location: " . BASE_URL . "index.php?msg= Data update successfully.");
    } else {
        echo "Failed: " . mysqli_error($db);
    }
}
?>




<?php include "./partials/header.php" ?>

<div class="w-[800px]  h-[750px] bg-[#E8E8E8] mx-auto  ">

    <a class="duration-500" href="index.php">
        <button class="cursor-pointer duration-200 hover:scale-75 active:scale-75 absolute ml-36 mt-10" title="Go Back">
            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="60px" viewBox="0 0 24 24" class="stroke-purple-500">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M11 6L5 12M5 12L11 18M5 12H19"></path>
            </svg>
        </button>
    </a>

    <div class="max-w-[480px] max-h-[550px]  mx-auto relative top-36 overflow-hidden z-10 bg-white p-8 rounded-lg shadow-md before:w-24 before:h-24 before:absolute before:bg-purple-500 before:rounded-full before:-z-10 before:blur-2xl after:w-32 after:h-32 after:absolute after:bg-sky-400 after:rounded-full after:-z-10 after:blur-xl after:top-24 after:-right-12">
        <h2 class="text-2xl text-sky-900 font-bold mb-6">Edit Item</h2>
        <?php
        
        $sql = "SELECT * FROM `cruds` WHERE id  = $id LIMIT 1";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result)
        ?>

        <form method="post" action="<?php ?>">
            <div class="mb-4">
                <label class="block text-lg font-semibold text-gray-600" for="name">Title Name</label>
                <input class="mt-1 p-2 w-full border rounded-md" value="<?php echo $row['title'] ?>" type="text" name="title" />
            </div>
            <div class="mb-4">
                <label class="block text-lg font-semibold text-gray-600" for="bio">Description</label>
                <input class="mt-1 px-4 w-full h-16 border rounded-md" value="<?php echo $row['description'] ?>" type="text" name="description" />
            </div>
            <div class="mb-4">
                <div class="flex items-center ">
                    <span class="mr-3 text-gray-600 text-lg font-semibold">Stats : </span>
                    <label class="inline-flex items-center mt-1">&nbsp;
                        <input type="radio" class="form-radio h-5 w-5 text-pink-600" name="statas" id="active" value="Active" <?php echo ($row['statas'] == 'Active') ? "checked" : ""; ?>>
                        <span class="ml-2 text-gray-700 text-[16px] font-semibold">Active</span>
                    </label>
                    <label class="inline-flex items-center ml-6 mt-1">
                        &nbsp;
                        <input type="radio" class="form-radio h-5 w-5 text-purple-600" name="statas" id="directive" value="Directive" <?php echo ($row['statas'] == 'Directive') ? "checked" : ""; ?>>
                        <span class="ml-2 text-gray-700 text-[16px] font-semibold">Directive</span>
                    </label>
                </div>

            </div>

            <div class="flex justify-end">
                <button class="[background:linear-gradient(144deg,#af40ff,#5b42f3_50%,#00ddeb)] text-white px-4 py-2 font-bold rounded-md hover:opacity-80" name="submit" type="submit">
                    Update
                </button>
            </div>
        </form>
    </div>


</div>


<?php include "./partials/footer.php" ?>