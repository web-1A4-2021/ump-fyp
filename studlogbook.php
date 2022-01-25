<?php
session_start();
include_once './include/config.php';
if (isset($_GET["logID"])) 
{
  $idlog = $_GET["logID"];
  
} else 
{
 header("Location: studentinfo.php");
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

        <title>Supervisor Profile</title>
        <style>
       #feedback{
          width:50%;
          height: 50px;
         
          padding-left: 20px;
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
          <li style="list-style-type:none;"><span ><a href="logout.php" style="color:#fff; " >Logout</a></span></li>
</nav>

        </div>
</div>

<div class="row">
    <div class="column left">
    <ul>
       <li> <a href="suphome.php" class="button" name="home">Home</a></li>
        <li><a href="studentinfo.php" class="button"  name="studinfo">Student Info</a></li>
       <li><a href="supprofile.php" class="button" name="profile">Profile</a></li>
        <li><a href="suprating.php" class="button" name="rate">Rate</a></li>
       <li><a href="#" class="button"  name="report">Report</a></li>
    </div>
    <div class="column right">

    <br><h3>Logbook Activities Every Week</h3>
    <form method="post">

        <table class="tb">

            
            <tr>
               <?php
                $conn = mysqli_connect("localhost", "root", "", "studFYP");
                if (!$conn) {
                   die('Could not connect: ' . mysqli_connect_error());
             }
              
                
                  //$user = $_SESSION['id'];
                   $sql = "SELECT * FROM logbook  where logbookid= '$idlog' ";
                   $result = $conn -> query($sql);

            if($result->num_rows > 0)
                {
                    while($row = $result -> fetch_assoc() )
                    {
                    
                       echo '<br><tr><td id="right" > Fyp Title: </td>' ;
                       echo '<td >' .$row["fyptitle"]. '</td></tr>';
                       echo '<tr><td id="right"> Week : </td>' ;
                       echo '<td>' .$row["week"]. '</td></tr>';
                      // echo '<tr><td id="right"> Name: </td>' ;
                      // echo '<td>' .$row["studname"]. '</td></tr>';
                     //  echo '<tr><td id="right"> Student ID: </td>' ;
                     //  echo '<td>' .$row["studID"]. '</td></tr>';
                    //   echo '<tr><td id="right"> Supervisor: </td>' ;
                   //    echo '<td>' .$row["supname"]. '</td></tr>';
                       echo '<tr><td id="right"> Date: </td>' ;
                       echo '<td>' .$row["date"]. '</td></tr>';
                       echo '<tr><td id="right"> Meeting Activity: </td>' ;
                       echo '<td>' .$row["logdesc"]. '</td></tr>';
                       echo '<tr><td id="right"> Updated Report: </td>' ;
                       echo '<td><a href="supervisor/download.php?file=' .$row['file']. '">'.$row['file'].'</a></td>';
                       echo '<tr><td id="right"> Feedback from evaluator: </td>' ;
                       echo '<td>' .$row["logbookfeedback"]. '</td></tr>';                       
                    }
                }
                 

             
             else{
                 echo "No Result";
             }
             
             $conn->close();
             ?>


 </table>

 
 <br><button type="back"  onClick="myFunction">Back</button>

 <script>
     function myFuntion(){
         window.location.href="studentinfo.php";
     }
</script>

</form>


</div>


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>

    </body>

    
</html>
