<?php
session_start();
if (isset($_GET["studID"])) 
{
  $studentid = $_GET["studID"];
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

        <title>Student Profile</title>
        <style>
       


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

    <br><h3>Student Profile</h3>
    <form>

        <table class="tb">

            
            <tr>
               <?php
                $conn = mysqli_connect("localhost", "root", "", "studFYP");
                if (!$conn) {
                   die('Could not connect: ' . mysqli_connect_error());
             }
                
                  //$user = $_SESSION['id'];
                   $sql = "SELECT * FROM fypstud WHERE st_id = '$studentid'";
                   $result = $conn -> query($sql);

            if($result->num_rows > 0)
                {
                    while($row = $result -> fetch_assoc() )
                    {
                        echo '<br><td id="right"> Student ID &nbsp: </td>' ;
                       echo '<td>' .$row["studID"]. '</td></tr>';
                       echo '<tr><td id="right"> Name &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp: </td>' ;
                       echo '<td>' .$row["studname"]. '</td></tr>';
                       echo '<tr><td id="right"> Program &nbsp&nbsp&nbsp&nbsp&nbsp: </td>' ;
                       echo '<td>' .$row["studprog"]. '</td></tr>';
                       echo '<tr><td id="right"> Phone No. &nbsp&nbsp: </td>' ;
                       echo '<td>' .$row["studphone"]. '</td></tr>';
                       echo '<tr><td id="right"> Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </td>' ;
                       echo '<td>' .$row["studemail"]. '</td></tr>';
                       echo '<tr><td id="right"> FYP Status&nbsp&nbsp: </td>' ;
                       echo '<td>' .$row["fypstatus"]. '</td></tr>';
                    }
                }
          
             else{
                 echo "No Result";
             }
             
             $conn->close();
             ?>


 </table>

 
 <br><button type="back" id ="button" onClick="myFunction">Back</button>

 <script>
     function myFunction(){
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
