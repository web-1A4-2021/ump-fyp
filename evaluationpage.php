<?php
//? this is Darwish editting
require_once("./include/config.php");
//require_once('connect.php');
//? End
session_start();
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

    <title>Evaluation Page</title>
        <style>
        table.center{
            text-align: center;
            padding: left 100px;
        }
        </style>
</head>
<body>
    <div class="header">
        <div class ="inner_header">
            <div class="logo_container">
                <img src="umplogo.png" alt="imgheader">  
            </div>

            <div class="textheader"><h1>Student FYP Management System</h1>
                <div>
                <nav>
                    <li>
                        <span>
                            <a href="logout.php">
                                <button>Logout</button>
                            </a>
                        </span>
                    </li>
                </nav>
                </div>
            </div>
        
        </div>
    </div>

    <div class="row">
        <div class="column left">
            <ul>
                <li> <a href="#" class="button" name="home">Home</a></li>
                <li><a href="studentinfo.php" class="button"  name="studinfo">Logbook</a></li>
                <li><a href="supprofile.php" class="button" name="profile">Supervisor Info</a></li>
                <li><a href="#" class="button" name="rate">Status</a></li>
                <li><a href="#" class="button"  name="report">Profile</a></li>
                <li><a href="#" class="button"  name="report">Rate</a></li>
            </ul>
        </div>
     

  <div class="column right">
        <form>
            
                
    

                        <table class="center">
                            
                            

                                    <tr>
                                        <td>
                                            <h3>Student's Work:</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <form method="post">

                                            <table class="tb">

                                                
                                                <tr>
                                                <?php
                                                    $conn = mysqli_connect("localhost", "root", "", "studfyp");
                                                    if (!$conn)    
                                                    {
                                                    die('Could not connect: ' . mysqli_connect_error());
                                                    }
                                                
                                                    
                                                    //$user = $_SESSION['id'];
                                                    $sql = "SELECT * FROM logbook WHERE logid= '$idlog' ";
                                                    $result = $conn -> query($sql);

                                                if($result->num_rows > 0)
                                                    {
                                                        while($row = $result -> fetch_assoc() )
                                                        {
                                                        
                                                        echo '<br><tr><td id="right" > Fyp Title: </td>' ;
                                                        echo '<td >' .$row["fyptitle"]. '</td></tr>';
                                                        echo '<tr><td id="right"> Week : </td>' ;
                                                        echo '<td>' .$row["week"]. '</td></tr>';
                                                        echo '<tr><td id="right"> Name: </td>' ;
                                                        echo '<td>' .$row["studname"]. '</td></tr>';
                                                        echo '<tr><td id="right"> Student ID: </td>' ;
                                                        echo '<td>' .$row["studID"]. '</td></tr>';
                                                        echo '<tr><td id="right"> Supervisor: </td>' ;
                                                        echo '<td>' .$row["supname"]. '</td></tr>';
                                                        echo '<tr><td id="right"> Date and Time: </td>' ;
                                                        echo '<td>' .$row["logtime"]. '</td></tr>';
                                                        //  echo '<tr><td id="right"> Meeting Activity: </td>' ;
                                                        //  echo '<td>' .$row["curactivity"]. '</td></tr>';
                                                        // echo '<tr><td id="right"> Next Meeting Activity: </td>' ;
                                                        //  echo '<td>' .$row["nextactivity"]. '</td></tr>';
                                                        //  echo '<tr><td id="right"> Updated Report: </td>' ;
                                                        //  echo '<td><a href="supervisor/download.php?file=' .$row['filename']. '">'.$row['filename'].'</a></td>';
                                                        echo '<tr><td id="right"> Feedback: </td>' ;
                                                        echo '<td><textarea id="feedback" name="logbookfeedback" placeholder="Write your feedback here.." style="height:200px"></textarea>';
                                                        
                                                        }
                                                    }
                                                    

                                                
                                                else{
                                                    echo "No Result";
                                                }
                                                
                                                $conn->close();
                                                ?>
                                                </tr>


                                            </table>
                                        </form>
                                        </td>
                                    </tr>
                                
                                 
                                    <br>
                                <button  href="studentliststatus.php">Back</button>
                                <button type="update" name="update" >Submit</button>

                                    <br><br>
                        </table>

                        

                <?php
                $conn = mysqli_connect("localhost", "root", "", "studfyp");
                if (!$conn) {
                die('Could not connect: ' . mysqli_connect_error());
                }

                if(isset($_POST["update"]))

                {

                    mysqli_query($conn,"update logbook set logbookfeedback='$_POST[logbookfeedback]' ") or die(mysqli_error($conn));

                    echo '<script>window.alert("Thankyou for your feedback!")';
                }
                else{
                //    echo "No Result";
                }

                $conn->close();
                ?>
        </form>



    </div>
    </div>


        <footer id="footer">     
            <span> Copyright &copy; 2021 All Right Reserved</span>
        </footer>    
</body>
</html>
