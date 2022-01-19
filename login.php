<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/layout.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/sidebar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <title>Login</title>
</head>
<body>
<form action="./function/userLogin.php" method="post">
    <p>UMP FYP</p>
    <label for="matricid">Matric ID</label>
    <input type="text" name="matricid" id="matricid" placeholder="User ID"> <br>
    <label for="pwd">Password</label>
    <input type="password" name="pwd" id="pwd" placeholder='Password'> <br>
    <label for="usertype">User Type</label>
    <select name="usertype" id="usertype">
        <option value="ext">External User</option>
        <option value="sup">Supervisor</option>
        <option value="lec">Lecturer</option>
        <option value="stud">Student</option>

    </select>
    <br>
    <input class='button' type="submit" value="Login">
</form>
<footer id='footer'style='margin:0;'>
    <?php include './include/footer.php';?>     
</footer>
<style>
    form{
        text-align:center;
        height:80vh;
    }
    form *{
        margin:10px;
        padding: 5px 0px 5px 0px;
    }
</style>
</body>
</html>