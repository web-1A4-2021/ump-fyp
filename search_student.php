<?php
session_start();
?>
<?php
//? this is Darwish editting
include_once "./include/config.php";
/*
//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "studfyp") or die(mysqli_error($link));
//SQL query
*/
//? END
if(isset($_POST['searchstudent'])){
    $studentid=$_POST['studentid'];
   

header("Location: view progress.php?id=".$studentid."");
}
if(isset($_POST['calendar'])){
  $studentid=$_POST['studentid'];
 

header("Location: calendarview.php?id=".$studentid."");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-sacale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
        <link href="css/layout.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="css/sidebar.css" type="text/css" rel="stylesheet" media="screen,projection">
        <title>Search_student</title>
        <style>
      

       #table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
input[type=text],textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
       </style>
    </head>
    <body>
    <div class="header">
        <div class ="inner_header">
            <div class="logo_container">
            <h1><img src="img/logoUMP.png" alt="imgheader">  Student FYP Management System </h1>
            </div>
        <nav>
          <li><span><a href="logout.php">Logout</a></span></li>
</nav>

        </div>
</div>

<div class="row">
    <div class="column left">
    <ul>
       <li> <a href="#" class="button" name="home">Home</a></li>
        <li><a href="Calendarview.php" class="button"  name="calview">Calendarview</a></li>
       <li><a href="studentsupervisor.php" class="button" name="studentsupervisor">studentsupervisor</a></li>
       <li><a href="Announcement.php" class="button" name="announ">Announcement</a></li>
       <li><a href="Viewprogress.php" class="button" name="Viewprog">Viewprogress</a></li>
       <li><a href="search_student.php" class="button" name="search_student">SearchStudent</a></li>
        
       <li><a href="#" class="button"  name="report">Report</a></li>
       <li><a href="#" class="button" name="Calc">Calc</a></li>
    
    </div>
    <div class="column right">

    
    <form method="post">

<table id="table">


    <header>
    <h1> Search_student </h1> 
    <header>
   
    


<tr>
    <th>Search student ID:</th>
    <td><input type="text" name="studentid"></td>
</tr>

</table>

  
  <br><br>
  <input type="submit" name="searchstudent" >
  <input type="submit" name="calendar" >
  
</form>