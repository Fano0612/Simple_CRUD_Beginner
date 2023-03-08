<?php
require_once "App/Controller/C_MVCTaskController.php";

?>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student List</title>
        <link href="../Style/Main.css" rel="stylesheet">

      

    </head>

    <body>

    <div id="video-background">
    <video autoplay muted loop>
      <source src="../Images/Bg.mp4" type="video/mp4">
    </video>
  </div>
  
<div class = "container1">
    <h1 class ="title">Student List 2023</h1>
    </div>

    <img class = "MainImage" src="../Images/Student.jpeg" alt=""> 

    <div class = "container2">

        <div class = "MainContainer">
    <div class = "MainForm">
   <form action="" method="POST">
<table>
<tr align="center">
<td>Student ID </td>
<td><input class = "insertion" type="text"name="id" size="45" /></td>
</tr>

<tr align="center">
<td>Name</td>
 <td><input class = "insertion" type="text" name="name" size="45"/></td>
 </tr>

<tr align="center">
 <td>Class</td>
<td><input class = "insertion" type="text"name="class" size="45"/></td>
</tr>

<tr align="center">
<td>Status</td>
 <td><input class = "insertion" type="text" name="status" size="45"/></td>
 </tr>
<div class ="submission">
 <tr align="center">
<td><input class = "insertionx" type="submit" name="submit"/></td>
</tr>
</div>

 </table>
</form>
<?php
if(isset($_POST['submit'])){ 
$M = new C_MVCTask();
$M->Insertx();
}
?>

    </div>   
    </div>
<br> <br>
    </div>
<div class = "container3">
<div class ="list">
<table border = "3">
 <tr align="center">
 <td>Student ID</td>
 <td>Name</td>
<td>Class</td>
 <td>Status</td>
  <td colspan = "2">Action</td>
  </tr>
  <?php
 $Host = "localhost";
$User = "root";
 $Password = "";
$Name = "mvctask";
 $Con = new C_MVCTask();
$Connect = mysqli_connect($Host,$User,$Password,$Name);
 $D = "SELECT * FROM student_list";
 if(isset($_GET['d'])){ 
 $nomor = $_GET['d'];
$Con->Delete($nomor);
 }
 $DExecution = $Con->model->execute($D);
                                                         
 while($row = $Con->model->Catch($DExecution)){
 echo "<tr>
   <td>$row[0]</td>
<td>$row[1]</td>
  <td>$row[2]</td>
 <td>$row[3]</td>
 <td><a href='Listedit.php?e=$row[0]'>Update</a></td>
 <td><a href='index.php?d=$row[0]'onClick=\"return confirm('Delete Data?')\"\>Delete</a></td>
 </tr>";
  }
 ?>
   </table>



</div>
</div>
      
    </body>

    </html>