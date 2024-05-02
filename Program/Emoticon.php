<?php 

class Emoticon{
    private $post;

    public function __construct($object){
        $this->post = $object;
    }
    public function getContend(){
        $post->filter();
        $contend = $this->ParserEmoticon($post->getContend());
        return $contend;

    }
    public function ParserEmoticon(){
        /// code will be
    }
}

?>