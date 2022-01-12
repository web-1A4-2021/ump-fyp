<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body align="center">
<form method="post" action="insert.php">
<p>Username: <input type="text" name="id" /></p>
<p>Password: <input type="password" name="programcode"/></p>
<p><input type="submit" value="Let me in" name="Login" /></p>
</form>
</body>
</html>
<?php 

                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <?php echo $_GET['Empty'] ?>                              
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <?php echo $_GET['Invalid'] ?>                               
                    <?php
                        }
                    ?>