<?php
require_once('connect.php');
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

        <title>Student's Status</title>
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
                    <li> <a href="#" class="button" name="home">Home</a></li>
                    <li><a href="studentinfo.php" class="button"  name="studinfo">Logbook</a></li>
                    <li><a href="supprofile.php" class="button" name="profile">Supervisor Info</a></li>
                    <li><a href="#" class="button" name="rate">Status</a></li>
                    <li><a href="#" class="button"  name="report">Profile</a></li>
                    <li><a href="#" class="button"  name="report">Rate</a></li>
                </ul>
            </div>
        

        <div class="column right">
        <br>
                <h3>Student's List</h3>
                <form>

                    <table class="center">

                        <tr>
                            <th>FYP ID</th>
                            <th>Student's Name</th>
                            <th>FYP Status</th>
                            <th>Progress</th>
                        </tr>

                        <tr>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "studFYP");
                            if (!$conn) 
                            {
                            die('Could not connect: ' . mysqli_connect_error());
                            }
                                                
                            //$user = $_SESSION['id'];
                            $sql = "SELECT fypID,studname,fypstatus FROM studinfo WHERE supervisor.user_id = login.user_id";

                            $result = $conn -> query($sql);

                            if($result->num_rows > 0)
                            {
                            while($row = $result -> fetch_assoc() )
                                {
                                    echo '<tr><td>' .$row["fypID"]. '</td>';
                                    echo '<td>' .$row["studname"]. '</td>';
                                    echo '<td>' .$row["fypstatus"]. '</td>';
                                    echo '<td><a href="evaluationpage.php">View</a></td></tr>';
                                }

                            }
                            else   
                            {
                                echo "No Result";
                            }

                            $conn->close();
                            ?>
                        </tr>

                    </table>

                </form>
        </div>
        </div>




            <footer id="footer">     
                <span> Copyright &copy; 2021 All Right Reserved</span>
            </footer>


    </body>

</html>
