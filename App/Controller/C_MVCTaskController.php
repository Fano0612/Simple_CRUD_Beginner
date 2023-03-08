<?php

include_once("App/Model/M_MVCTaskModel.php");

class C_MVCTask {
    public $model;
    public function __construct(){
        $this->model = new M_MVCTask();
    }
    public function Index(){
        $D = $this->model->SelectAll();
        include "index.php";
    }
    public function Edit($Number){
        $D = $this->model->Selectstudent($Number); 
        $row = $this->model->Catch($D); 
        include "Edit.php"; 
    }
    public function Insert(){
        include "index.php"; 
    }
    public function Update(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $status = $_POST['status'];
        $Update = $this->model->Updatestudent($id,$name, $class, $status);
        header("location:index.php");
    }
    public function Delete($nomor){
        $Delete = $this->model->Deletestudent($nomor);
    }
    public function Insertx(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $status = $_POST['status'];
        $Insert = $this->model->Insertstudent($id, $name, $class, $status);
        // header("location:index.php");
        }
    



    public function __destruct(){
        }
    }        
