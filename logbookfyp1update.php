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

        <title>Logbook</title>
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
       <li><a href="studentfyp1profile.php" class="button"  name="profile">Profile</a></li>
       <li><a href="#" class="button"  name="report">Rate</a></li>
    </div>
    <div class="column right">
        <br>


    <div align="center"><h3>Logbook Activities Every Week</h3><br><br>
<form action="" method="post">
        <table>

        <?php
         $sql = "SELECT fyptitle,week,date,logdesc FROM logbook where logbookid='" . $_GET['id'] . "'";
         $result = $conn -> query($sql);

         if($result->num_rows > 0){

            while($row = $result -> fetch_assoc() ){

                echo '<tr>
  <td><label>Final Year Project Title :</label></td>
  <td><input type="text" name="fyptitle" value="'.$row["fyptitle"].'" required></td></tr>';
  echo '<tr>
  <td><label>Week :</label></td>
  <td><input type="text" name="week" value="'.$row["week"].'" required></td></tr>';
                
  echo '<tr>
  <td><label>Date :</label></td>
  <td><input type="text" name="date" placeholder="yyyy-mm-dd"  value="'.$row["date"].'" required></td></tr>';
  echo '<tr>
  <td><label>Activity Description :</label></td>
  <td><input type="text" name="logdesc"  value="'.$row["logdesc"].'" required size="100"></textarea></td>
</tr>';/*
'<tr>
  <td><lable>Upload :</label></td>
  <td><input type="file" name="file"/ value="'.$row["file"].'"></td>
</tr>';*/
              


            }



         }

         else{
            echo "No Result";
        }
        
        $conn->close();



        ?>
<br>
<tr>
  <td></td>
  <td></td>
</tr>

    
 </table><br><br><br><br>
 <br><button type="update" name="update" onClick="myFunction()">Update</button>
 
 <?php
$conn = mysqli_connect("localhost", "root", "", "studfyp");
if (!$conn) {
   die('Could not connect: ' . mysqli_connect_error());
}

if(isset($_POST["update"]))

{
    
    mysqli_query($conn,"update logbook set fyptitle='$_POST[fyptitle]',week='$_POST[week]', date='$_POST[date]', logdesc='$_POST[logdesc]' WHERE logbookid='" . $_GET['id'] . "'") or die(mysqli_error($conn));

    ?>
   <script>
    location="logbookfyp1page2.php";</script>

<?php
    
    
}
?>
<script>
function myFunction() {
  alert("Your information Successfully updated!");
}
</script>

 
    </form>
  
    </div>

</div>

 


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>
</html>
