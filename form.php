 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP FORM</title>
 </head>
 <style>
     .div-1 {
         width: 1000px;
         height: 600px;
         background-color: bisque;
         margin-left: auto;
         margin-right: auto;
         padding-left: 25px;
         padding-right: 25px;

     }

     .h2-1 {
         text-align: center;
         font-size: 40px;
         text-decoration: underline;
     }

     #myForm {
         width: 600px;

         border: 4px solid black;
         padding: 20px;

     }

     #tb-1 {
         width: 500px;
         border: 4px solid black;
         margin-top: 20px;
         padding: 10px;
     }
 </style>

 <body>
     <div class="div-1">
         <h2 class="h2-1">PHP FORM</h2>
         <h3>
             <?php
                if (isset($_POST['name'])) {
                    $name = $_POST['name'];
                    $gender = $_POST['gender'];
                    $coder = $_POST['coder'];
                    $department = $_POST['department'];
                }
                ?>


             <form method="post" id="myForm" name="myFrom" action="form.php">
                 <table>
                     <tr>
                         <td>Name</td>
                         <td><input required="1" name="name" type="text"></td>
                     </tr>
                     <tr>
                         <td>Gender</td>
                         <td>
                             <input value="male" name="gender" type="radio"> Male
                             <input value="female" name="gender" type="radio">Female
                             <input value="others" name="gender" type="radio">Others
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <select name="coder">
                                 <option value="PHP">PHP</option>
                                 <option value="JAVA">JAVA</option>
                                 <option value="Javascript">Javascript</option>
                                 <option value="C++">C++</option>
                                 <option value="HTML">HTML</option>
                                 <option value="C#">C#</option>
                             </select>
                         </td>
                     </tr>
                     <tr>
                         <td>Department</td>
                         <td>
                             <input value="CSC" name="department[]" type="checkbox">CSC
                             <input value="Maths" name="department[]" type="checkbox">Maths
                             <input value=" English" name="department[]" type="checkbox"> English
                             <input value=" Bangle" name="department[]" type="checkbox"> Bangle
                             <input value=" BSC Engineer" name="department[]" type="checkbox"> BSC Engineer

                         </td>
                     </tr>
                     <tr>
                         <td>
                             <input value="Submit" type="submit">
                             <input value="Reset" type="reset">
                         </td>
                     </tr>
                 </table>
             </form>


             <table id="tb-1">

                 <td>Name : </td>
                 <td><?php echo $name; ?> </td>
                 </tr>
                 <tr>
                     <td>Gender : </td>

                     <?php
                        if ($gender == "male") { ?>
                         <td><?php echo "Male" ?></td>
                     <?php } elseif ($gender == "female") { ?>
                         <td><?php echo "Female" ?></td>
                     <?php } else { ?>
                         <td><?php echo "Others" ?></td>

                     <?php } ?>

                 </tr>
                 <tr>
                     <td>Department : </td>
                     <td>
                         <?php
                            foreach ($department as $length => $value) {
                                echo $value;
                            }
                            ?>
                     </td>
                 </tr>
                 <tr>
                     <td>Language</td>
                     <td><?php echo $coder; ?></td>
                 </tr>
             </table>



         </h3>

     </div>



 </body>

 </html>