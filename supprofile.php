<?php
session_start();
$_SESSION['id'] ='id';
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
       <li> <a href="#" class="button" name="home">Home</a></li>
        <li><a href="studentinfo.php" class="button"  name="studinfo">Student Info</a></li>
       <li><a href="supprofile.php" class="button" name="profile">Profile</a></li>
        <li><a href="#" class="button" name="rate">Rate</a></li>
       <li><a href="#" class="button"  name="report">Report</a></li>
    </div>
    <div class="column right">

    <br><h3>Personal Information</h3>
    <form>

        <table class="tb">

            
            <tr>
               <?php
                $conn = mysqli_connect("localhost", "root", "", "student");
                if (!$conn) {
                   die('Could not connect: ' . mysqli_connect_error());
             }
              
                
                  $user = $_SESSION['id'];
                   $sql = "SELECT * FROM supervisor ";
                   $result = $conn -> query($sql);

            if($result->num_rows > 0)
                {
                    while($row = $result -> fetch_assoc() )
                    {
                    
                       echo '<br><tr><td id="right" > Name: </td>' ;
                       echo '<td >' .$row["supname"]. '</td></tr>';
                       echo '<tr><td id="right"> Email: </td>' ;
                       echo '<td>' .$row["supemail"]. '</td></tr>';
                       echo '<tr><td id="right"> Phone No.: </td>' ;
                       echo '<td>' .$row["supphone"]. '</td></tr>';
                       echo '<tr><td id="right"> Room: </td>' ;
                       echo '<td>' .$row["suproom"]. '</td></tr>';
                    }
                }
                 

             
             else{
                 echo "No Result";
             }
             
             $conn->close();
             ?>


 </table>

 
 <br><button type="update" onClick="myFunction">Update</button>

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
