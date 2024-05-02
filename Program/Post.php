<?php
class Posts{
    private $title;
    private $content;
    public function filter($filtered_contend, $filtered_title){
        $this->title = $filtered_title;
        $this->content = $filtered_contend;
    }
    public function getContend(){
        return $this->content;
    }
}

?>