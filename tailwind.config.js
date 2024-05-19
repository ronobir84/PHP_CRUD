/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}"],
    theme: {
        extend: {},
    },
    plugins: [],
}


//  CREATE TABLE cruds(
//      id INT NOT NULL AUTO_INCREMENT,
//      title VARCHAR(255),
//      statas VARCHAR(255),
//      description VARCHAR(255),
//      crudDate DATETIME DEFAULT CURRENT_TIMESTAMP,
//      PRIMARY KEY(id)
//  );






    // <div  class="" >
    //     <table class="w-1/2 mx-auto   text-sm    text-blue-100 dark:text-blue-100">
    //         <thead class="text-xs text-white  bg-blue-600 border-b border-blue-400 dark:text-white">
    //             <tr>
    //                 <th scope="col" class="px-6 py-3 bg-blue-500">
    //                     Id
    //                 </th>
    //                 <th scope="col" class=" ">
    //                     Title
    //                 </th>
    //                 <th scope="col" class="px-6 py-3 bg-blue-500">
    //                     Stats
    //                 </th>
    //                 <th scope="col" class="px-6 py-3">
    //                     Description
    //                 </th>
    //                 <th scope="col" class="px-6 py-3 bg-blue-500">
    //                     Date Time
    //                 </th>
    //                 <th scope="col" class="px-6 py-3 ">
    //                     Action
    //                 </th>
    //             </tr>
    //         </thead>
    //         <tbody>
    //             <tr class="bg-blue-600 border-b border-blue-400">
    //                 <th scope="row" class="px-6 py-4 font-medium bg-blue-500 text-blue-50 whitespace-nowrap dark:text-blue-100">
    //                     1
    //                 </th>
    //                 <td class="text-center">
    //                     Web developer
    //                 </td>
    //                 <td class="text-center bg-blue-500">
    //                     Active

    //                 </td>
    //                 <td class=" text-center">
    //                     HTML CSS JAVASCRIPT PHP JAVA
    //                 </td>
    //                 <td class=" text-center bg-blue-500">
    //                     2024-05-18 11:26:05
    //                 </td>
    //                 <td class="text-center">
    //                     <a href="#" class="font-medium text-white hover:underline">Edit</a>
    //                     <a href="#" class="font-medium text-white hover:underline">Delete</a>
    //                     <a href="#" class="font-medium text-white hover:underline">View</a>
    //                 </td>
    //             </tr>

    //         </tbody>
    //     </table>
    //     </div >