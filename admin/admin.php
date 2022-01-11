<?php include_once '../include/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/layout.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/sidebar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <title>Administrator</title>
</head>
<body>
<div class="header">
    <div class ="inner_header">
        <div class="logo_container">
            <h1><img src="../umplogo.png" alt="imgheader">  Student FYP Management System </h1>
        </div>
        <nav>
        <li style="list-style-type:none;"><span ><a href="logout.php" style="color:#fff; " >Logout</a></span></li>
        </nav>
    </div>
</div>

<div class="row">
    <div class="column left">
        <ul>
            <li> <a href="./admin.php" class="button" name="home">Home</a></li>
            <li> <a href="./" class="button"  name="">User</a></li>
            <li> <a href="./" class="button"  name="">Report</a></li>
        </ul>
    </div>
    <div class="column right">
    <br><h3>Administrator</h3>
    <?php
        $q = mysqli_query($conn, "SELECT * FROM userinfo ");
        $view = mysqli_num_rows($q);
        if($view == 0)
        {
            $output = 'No Search Result';
        }else
        {
            echo "<table>";
            echo "<tr>
                <th>User ID</th>
                <th>User Role</th>
                <th>User Type</th>
                </tr>";
            while($row = mysqli_fetch_array($q))
            {
                echo "<tr>
                    <td>".$row['user_id']."</td>
                    <td>".$row['user_role']."</td>
                    <td>".$row['user_type']."</td>
                    </tr>";
            }
            echo "</table>";
        }
    ?>
    <form>
        <table class="tb">
            <tr>
            <?php
                
            ?>
        </table>
        <br><button type="back" id ="button" onClick="window.location.href='./admin.php';">Back</button>
    </form>
</div>
<footer id="footer">
    <?php include '../include/footer.php';?>     
</footer>    
</body>
</html>