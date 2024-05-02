<?php 
class Comment{
    private $date;
    private $contend;
    public function filter($filtered_contend){
        $this->contend = $filtered_contend;
    }
    public function getContend(){
        return $this->contend;
    }
}

?>