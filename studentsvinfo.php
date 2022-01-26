<?php 
include_once './include/config.php';
session_start();?>
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

        <title>Supervisor Information</title>
        <style>
       table.center{
           text-align: center;
           padding-left:100px;
       }


        </style>
    </head>
    <body>
    <div class="header">
        <div class ="inner_header">
            <div class="logo_container">
            <img src="umplogo.png" alt="imgheader">  
            </div><div class="textheader"><h1>Student FYP Management System</h1><div><nav>
                <li><span><a href="logout.php"><button>Logout</button></a></span></li>
      </nav>
</div></div>
            
        </div>
</div>

<div class="row">
    <div class="column left">
    <ul>
    <li> <a href="studenthome2.php" class="button" name="home">Home</a></li>
        <li><a href="logbookfyp1page2.php" class="button"  name="studinfo">Logbook</a></li>
       <li><a href="studentsvinfo.php" class="button" name="profile">Supervisor Info</a></li>
        <li><a href="studentfyp1status.php" class="button" name="status">Status</a></li>
       <li><a href="profile.php" class="button"  name="profile">Profile</a></li>
       <li><a href="#" class="button"  name="report">Rate</a></li>
    </div>
    <div class="column right">
        <br>


    <div align="center"><h3>Supervisor Info</h3><br><br>

    <?php


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$matricid=$_SESSION['User'];
 
$sql = "SELECT supname,supemail,supphone,suproom FROM supervisor";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
?><table border="1" align="center">

  <tr>
    <td>Name</td>
    <td><?php echo $row["supname"];?></td>
    
  </tr>
  <tr>
    <td>Age</td>
    <td><?php echo $row["supemail"];?></td>
    
  </tr>
  <tr>
    <td>Gender</td>
    <td><?php echo $row["supphone"];?></td>
    
  </tr>
    <tr>
    <td>Title</td>
    <td><?php echo $row["suproom"];?></td>
    
  </tr>
    </table> 
 
<?php
  }
} else { ?>
    
    <p align ="center"><?php echo "No data in databases";?></p> <?php
}
 

//$conn->close();
?>
  
    </div>

</div>

 


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>
</html>













