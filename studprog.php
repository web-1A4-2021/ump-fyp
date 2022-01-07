<?php
session_start();
$_SESSION['st_id'] ='st_id';

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

        <title>Student Progress</title>
        <style>
        table.tb1 td{
        
        padding-top: 10px;
        padding-bottom: 10px;
        }

        table{
           margin-left:100px;
            text-align: center;
            width: 80%;

        }
        h4{
        margin-left:100px;
         font-family: 'Montserrat';
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
        <li><a href="#" class="button" name="rate">Rate</a></li>
       <li><a href="#" class="button"  name="report">Report</a></li>
    </div>
    <div class="column right">

    <br><h3>Student Progress</h3>
    
       <?php
          $conn = mysqli_connect("localhost", "root", "", "student");
          if (!$conn) {
             die('Could not connect: ' . mysqli_connect_error());
       }
        
       $sql = "SELECT studname FROM fypstud WHERE st_id = '$studentid'";
       $result = $conn -> query($sql);
         if($result->num_rows > 0)
         {
             while($row = $result -> fetch_assoc() )
             {
                echo '<br><h4>Name : ' .$row["studname"]. '</h4><br>';
               }
           }
             else{
                 echo "No Result";
              
              } 
              ?>
    <form>

        <table  id="tb1" border="1" >

        <?php
            $sql = "SELECT logid,  week FROM logbook WHERE studid = '$studentid'  " ;
            $result = $conn -> query($sql);

            if($result->num_rows > 0)
            {
                while($row = $result -> fetch_assoc() )
                {
                    ?>

            
              <tr>
             <td><?php echo 'Week ' .$row["week"].''; ?></td>
             <td><a href="studlogbook.php?logID=<?php echo $row['logid'] ?>">View</a></td>
              </tr>
              
                    
                <?php
            }

        }
        else{
            echo "No Result";
        }
        $conn->close();


?>
 </table>
 <br><button type="back" onClick="myFunction">Back</button>

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