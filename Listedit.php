<?php
require_once "App/Controller/C_MVCTaskController.php";

?>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student List Edit</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="../Style/edit.css" rel="stylesheet">
</head>
<body>
<div id="video-background">
    <video autoplay muted loop>
      <source src="../Images/Bg.mp4" type="video/mp4">
    </video>
  </div>

<div class = "container1">
<h1 class = "title">Student List Update</h1>
</div>

<img class = "EditImage" src="../Images/Student.jpeg" alt=""> 

<div class = "container2">
<div class = "mainEdit" >
<form action="" method="POST">
<table border ="3">
    <?php 
     $Con = new C_MVCTask();
     $id = $_GET['e'];
     $D = "SELECT * FROM student_list WHERE id = $id";
     $DExecution = $Con->model->execute($D);
    $row = $Con->model->Catch($DExecution)?>

<tr align="center">
<td>Student ID</td>
<td><input class = "stdlist" type="text"name="id" value="<?=$row[0]?>" size="50" readonly
/>
</td>
</tr>

<tr align="center">
<td>Name</td>
<td><input class = "stdlist" type="text"name="name" value="<?=$row[1]?>" size="50"
required/></td>
</tr>

<tr align="center">
<td>Class</td>
<td><input class = "stdlist" type="text"name="class" value="<?=$row[2]?>" size="50"
required/></td>
</tr>

<tr align="center">
<td>Status</td>
<td><input class = "stdlist" type="text"name="status" value="<?=$row[3]?>" size="50"
required/></td>
</tr>

<tr align="center">
<td><input class = "stdlistx" type="submit" name="submit" value="Update"/></td>
</tr>
</table>
</form>
</div>
</div>


</body>
</html>
<?php
if(isset($_POST['submit'])){
$main = new C_MVCTask();
$main->Update();
}
?>