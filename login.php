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
<form action="./function/userLogin.php" method="get">
    <label for="userid">User ID</label>
    <input type="text" name="userid" id="userid" placeholder="User ID"> <br>
    <label for="pwd">Password</label>
    <input type="password" name="pwd" id="pwd" placeholder='Password'> <br>
    <label for="usertype">User Type</label>
    <select name="usertype" id="usertype">
        <option value="ext">External User</option>
        <option value="sup">Supervisor</option>
        <option value="lec">Lecturer</option>

    </select>
    <input class='button' type="submit" value="Login">
</form>
<footer id='footer'style='margin:0;'>
    <?php include './include/footer.php';?>     
</footer>
</body>
</html>