<?php
abstract class Database
{
    abstract public function set_host();
    abstract public function set_db();
    abstract public function set_user();
    abstract function set_password();

    public function connect(){
        // code will be here
    }
    public function query(){

    }
}
