<?php

class Connection{
    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '','MVCTask');
    }
    public function ConnectTo(){
        return $this->mysqli;
    }
   

}