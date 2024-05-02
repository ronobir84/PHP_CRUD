<?php 
class BBCodeParser{
    private $post;

    public function __construct($object){
        $this->post = $object;  
        
    }
    public function getContend(){
        $post->filter();
        $contend = $this->parserBBcoder($post->getContend());
        return $contend;
         
    }
    private function parserBBcode($contend){
        //will be code
    }
}

?>