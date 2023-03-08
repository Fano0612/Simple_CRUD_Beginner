<?php
require "App/Connection.php";
class M_MVCTask {
private $id;
private $name;
private $connect;
function __construct(){
$this->connect = new Connection();
}
function execute($query){
return mysqli_query($this->connect->ConnectTo(),$query);
}
function SelectAll(){
$query = "SELECT * FROM student_list";
return $this->execute($query);
}
function Selectstudent($id){
$query = "SELECT * FROM student_list WHERE
id='$id'";
return $this->execute($query);
}
function Updatestudent($id,$name, $class, $status){
$query = "UPDATE student_list SET name='$name', class='$class', status='$status' WHERE id=$id";
return $this->execute($query);
}
function Deletestudent($id){
$query = "DELETE FROM student_list WHERE
id='$id'";
return $this->execute($query);
}
function Insertstudent($id, $name, $class, $status){
$query = "INSERT INTO student_list VALUES ('$id','$name', '$class', '$status')";
return $this->execute($query);
}

function Catch($var){
return mysqli_fetch_array($var);
}

function __destruct(){
}
}
?>