<?php
session_start();
$_SESSION['supid'] ='supid';

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
   input{
          width:50%;
          height: 50px;
          margin-top:30px;
          padding-left: 20px;
      }

      #right{

padding-left: 100px;
width: 20%;
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
       <li> <a href="#" class="button" name="home">Home</a></li>
        <li><a href="studentinfo.php" class="button"  name="studinfo">Student Info</a></li>
       <li><a href="supprofile.php" class="button" name="profile">Profile</a></li>
        <li><a href="suprating.php" class="button" name="rate">Rate</a></li>
       <li><a href="#" class="button"  name="report">Report</a></li>
    </div>
    <div class="column right">

    <br><h3>Personal Information</h3>
    <form action="" name="svform" method="post" enctype = "multipart/form-data">

        <table class="tb">

            
            <tr>
               <?php
                $conn = mysqli_connect("localhost", "root", "", "student");
                if (!$conn) {
                   die('Could not connect: ' . mysqli_connect_error());
             }
              
                
                  //$user = $_SESSION['id'];
                   $sql = "SELECT * FROM supervisor ";
                   $result = $conn -> query($sql);

            if($result->num_rows > 0)
                {
                    while($row = $result -> fetch_assoc() )
                    {
                    
                       echo '<br><tr><td id="right" > Name: </td>' ;
                       echo '<td ><input type ="text" class="form-cotrol" placeholder="Enter Name" name="name" value="'.$row["supname"].'" </td></tr>';
                       echo '<tr><td id="right"> Email: </td>' ;
                       echo '<td ><input type ="text" class="form-cotrol" placeholder="Enter Email" name="email" value="'.$row["supemail"].'" </td></tr>';
                       echo '<tr><td id="right"> Phone No.: </td>' ;
                       echo '<td ><input type ="text" class="form-cotrol" placeholder="Enter Phone No." name="phone" value="'.$row["supphone"].'" </td></tr>';
                       echo '<tr><td id="right"> Room: </td>' ;
                       echo '<td ><input type ="text" class="form-cotrol" placeholder="Enter Room" name="suproom" value="'.$row["suproom"].'" </td></tr>';
                    }
                }
                 

             
             else{
                 echo "No Result";
             }
             
             $conn->close();
             ?>


 </table>

 
 <br><button type="update" name="update" >Update</button>

 <script>
     function myFuntion(){
         window.location.href="studentinfo.php";
     }
</script>

<?php
$conn = mysqli_connect("localhost", "root", "", "student");
if (!$conn) {
   die('Could not connect: ' . mysqli_connect_error());
}

if(isset($_POST["update"]))

{

    mysqli_query($conn,"update supervisor set supname='$_POST[name]', supemail='$_POST[email]', supphone='$_POST[phone]',suproom='$_POST[suproom]' ") or die(mysqli_error($conn));

    echo '<script>window.alert("Thankyou for your feedback!")';
}
?>
</form>

</form>


</div>


<footer id="footer">     
                        <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>

    </body>

    
</html>
