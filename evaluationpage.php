<?php
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
</div>
<div class="column right">
    <br>


    <form>
        <div class="card">
            <h4>Student's Information</h4>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "studFYP");
            if (!$conn) {
                die('Could not connect: ' . mysqli_connect_error());
            }
            
                //$user = $_SESSION['id'];
                $sql = "SELECT id,studID,studname,fypstatus FROM students"; // WHERE userID = $user";
                $result = $conn -> query($sql);

                if($result->num_rows > 0){
                    while($row = $result -> fetch_assoc() )
                {
                    echo '<td>' .$row["studname"]. '</td>';
                    echo '<tr><td>' .$row["studID"]. '</td>';
                    echo '<tr><td>' .$row["studprog"]. '</td>';
                    echo '<tr><td>' .$row["fypstatus"]. '</td>';
                    echo '<tr><td>' .$row["studphone"]. '</td>';
                    echo '<tr><td>' .$row["studemail"]. '</td>';
                    
                }

            }
            else{
                echo "No Result";
            }
            $conn->close();
            ?>
        </div>

        <table class="center">
            
                <table>

                    <tr>
                        <td>
                            </td>
                            <td>
                                Student's Work:
                        </td>
                    </tr>
                    <tr>
                            <td>
                            </td>
                        <td>
                            <?php
                                echo readfile("logbook.php");
                            ?>
                        </td>
                    </tr>
                    
                    <tr>
                            <td>
                            </td>
                        <td>
                            Feedback or Comments:
                        </td>
                    </tr>
                    
                    
                    <tr>
                            <td>
                            </td>
                        <td>
                            <textarea cols="10" rows="10" id="comment_entered">
                            </textarea>
                        </td>
                    </tr>
                    
                    <tr>
                            <td>
                            </td>
                        <td>
                            <input type="submit" value="Submit" onclick="submitcomment();"/>
                        </td>
                    </tr>    
        </table>    
                <br><br>
        </table>
    </form>
</div>
</div>
<footer id="footer">     
<span> Copyright &copy; 2021 All Right Reserved</span>
</footer>    
</body>
</html>
