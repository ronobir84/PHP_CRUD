 <?php
    class Calculation{
        public function myCal(array $x){
            foreach($x as $value){
             echo $value[0];
             echo " : ";
             echo $value[1] * $value[2] . "<br>";
            }

        }
    }


    ?>