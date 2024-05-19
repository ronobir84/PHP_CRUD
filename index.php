<?php include './partials/header.php'; ?>


<div class="w-[90%] h-[900px] bg-[#E8E8E8] mx-auto">
    <?php
    if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo '<div id="alert-2" class="flex w-1/3 items-center p-4 mb-4 mx-auto relative top-5  rounded bg-red-50 dark:bg-green-600 dark:text-white" role="alert">
  <span class="sr-only">Info</span>
  ' . $msg . '
  <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
    </svg>
  </button>
</div>';
    }

    ?>
    <a href="add_new.php">
        <button class=" top-20 left-[81.6%] relative  w-36 h-12 cursor-pointer flex items-center border border-blue-600 bg-blue-600 group hover:bg-blue-600 active:bg-blue-600 active:border-blue-600">
            <span class="text-gray-200 font-semibold ml-8 transform group-hover:translate-x-20 transition-all duration-300">Add Item</span>
            <span class="absolute right-0 h-full w-10 rounded-lg bg-blue-600 flex items-center justify-center transform group-hover:translate-x-0 group-hover:w-full transition-all duration-300">
                <svg class="svg w-8 text-white" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" x2="12" y1="5" y2="19"></line>
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                </svg>
            </span>
        </button>

    </a>
    <div class="">
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
                    <th scope="col" class="text-center text-lg text-slate-50 font-semibold py-4">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";
                $sql = "SELECT * FROM `cruds`";
                $result = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr class="bg-blue-600 border-b border-blue-400">
                        <th scope="row" class="px-6 py-6 font-medium bg-blue-500 text-gray-200 text-[16px] whitespace-nowrap dark:text-blue-100 ">
                            <?php echo $row['id'] ?>
                        </th>
                        <td class="text-center text-[16px] font-medium text-gray-200">
                            <?php echo $row['title'] ?>
                        </td>
                        <td class="text-center bg-blue-500 font-medium text-gray-200">
                            <?php echo $row['statas'] ?>

                        </td>
                        <td class=" text-center font-medium text-gray-200">
                            <?php echo $row['description'] ?>
                        </td>
                        <td class=" text-center bg-blue-500 font-medium text-gray-200">
                            <?php echo $row["crudDate"] ?>
                        </td>
                        <td class="text-center">
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="font-medium text-white ">
                                <button class="w-12 h-12 relative right-6  rounded-full bg-[#1F7153] text-white hover:-translate-y-1 hover:scale-110 transition ease-in-out delay-75 duration-150">Edit</button>
                            </a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="font-medium text-white ">
                                <button class="w-12 h-12  text-xs  rounded-full bg-[#DC2626] text-white hover:-translate-y-1 hover:scale-110 transition ease-in-out delay-75 duration-150">Delete</button>
                            </a>
                            <a href="view.php?id=<?php echo $row['id'] ?>" class="font-medium text-white">
                                <button class="w-12 h-12 relative left-6  rounded-full bg-[#02BAED] text-white hover:-translate-y-1 hover:scale-110 transition ease-in-out delay-75 duration-150">View</button>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>


            </tbody>
        </table>
    </div>


</div>

<?php include './partials/footer.php'; ?>