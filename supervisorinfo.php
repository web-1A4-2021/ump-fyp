<?php
session_start();
include_once './include/config.php';
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

        <title>Student Info</title>
        <style>
       table.center{
           text-align: center;
           padding-left:100px;
       }
       table{
           margin-left:100px;
            text-align: center;
            width: 80%;

        }


        </style>
    </head>
    <body>
    <div class="header">
        <div class ="inner_header">
            <div class="logo_container">
            <h1><img src="umplogo.png" alt="imgheader">  Student FYP Management System </h1>
            </div>
        <nav>
          <li><span><a href="logout.php">Logout</a></span></li>
</nav>

        </div>
</div>

<div class="row">
    <div class="column left">
    <ul>
    <li> <a href="studenthome.php" class="button" name="home">Home</a></li>
        <li><a href="studentlogbook.php" class="button"  name="studinfo">Logbook</a></li>
       <li><a href="supervisorinfo.php" class="button" name="profile">Supervisor Info</a></li>
        <li><a href="Status.html" class="button" name="rate">Status</a></li>
       <li><a href="#" class="button"  name="report">Profile</a></li>
       <li><a href="#" class="button"  name="report">Rate</a></li>
    </div>
    <div class="column right">

    <br><h3>Supervisor Info</h3><br>
    <form>

        <table class="center">

            <tr>
                <th>Supervisor ID</th>
                <th>Supervisor Name</th>
                <th>Supervisor Email</th>
                <th>Phone</th>
                <th>Room</th>
            </tr>
            <tr>
               <?php
           
                if (!$conn) {
                   die('Could not connect: ' . mysqli_connect_error());
             }
              
                  //$user = $_SESSION['id'];
                   $sql = "SELECT supervisor.sup_id,supervisor.supname,supervisor.supemail,supervisor.supphone,supervisor.suproom,student.svid FROM student,supervisor";
                   $result = $conn -> query($sql);

                   if($result->num_rows > 0){
                      
                    while($row = $result -> fetch_assoc() )
                    {
                       echo '<tr><td>' .$row["sup_id"]. '</td>';
                       echo '<td>' .$row["supname"]. '</td>';
                       echo '<td>' .$row["supemail"]. '</td>';
                       echo '<td>' .$row["supphone"]. '</td>';
                       echo '<td>' .$row["suproom"]. '</td>';

                 }

             }
             else{
                 echo "No Result";
             }
             $conn->close();
             ?>


 </table>
 
 </form>









</div>

 


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>
</html>
