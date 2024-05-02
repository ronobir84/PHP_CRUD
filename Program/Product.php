<?php 
class Product extends Database{
    public $host = "Im new host ing your website <br>";
    public $db = "Im Bangladesh user in your websites <br>";
    public $user = "Im new User in your websites <br>";
    public $password = "@12345678 <br>";
    public function set_host(){
        echo $this->host;
         
    }
    public function set_db()
    {
        echo $this->db;
         
    }
    public function set_user(){
      echo  $this->user;
       
    }
    public function set_password(){
       echo $this->password;
        
    }
}

?>