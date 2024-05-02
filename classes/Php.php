 <?php
//  namespace php\priash;
 class Php{
     
    public static function framework(){
         self::ourPhp() . "<br>";
    }
    public static function ourPhp(){
         return __CLASS__;
    }
          



}


     //  $java = new Language();
     //  $java->setCut("OOP");
     //  $java->setFramework("spring");
     //  $php = clone $java;
     //     $php->setFramework(" coding");
     //  echo $java->getCut() . "<br>";
     //  echo $java->getFramework() . "<br>";
     //  echo $php->getCut() . "<br>";
     //  echo $php->getFramework() . "<br>";




     // for ($i = 0; $i < 10; $i++) {
     // }
     // $arr = array("HTML", "CSS", "PHP", "Javascript");
     // $coding = new ArrayObject($arr);

     // $iterator = $coding->getIterator();
     // $iterator->append("JAVA");

     // while ($iterator->valid()) {
     //      echo $iterator->current() . "<br>";
     //      $iterator->next();
     // }
 


 $len = array("PHP", "java", "html", "other");
  $ai = new ArrayIterator($len);

 $lem = new CachingIterator($ai);
 
  foreach($lem as $value){
     //  echo $value ;
       if($lem->hasNext()){
           echo "  ";
       }
  }




// class OurPhp{
//       public $html;
//       public $css;
//       protected $java;
//       private $php;
//       public function __construct(){
//            $this->html = "I know html";
//            $this->css = "I Love Css";
//            $this->java = "Im a java coder";
//            $this->php = "IM a Php coder in laver";
//       }
// }
//  $pro = new OurPhp();
//  $coder = serialize($pro);
//  file_put_contents("programmer.text", $coder);
//  $unsent = unserialize($coder);
//  echo "<pre>";
//  print_r($unsent);
//  echo "</pre>"

//  echo $coder;
//   

// class Php2{
       
//           public function __construct()
//           {
//                echo "i love php <br>";
//           }
     
     
// }
 
 

  

   

    ?>