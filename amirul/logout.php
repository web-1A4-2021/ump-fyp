<?php 
    session_start();
    if(isset($_GET['logout']))
    {      
        session_destroy();
        ?>
                
    <script>window.alert("Logout Successfully");
    location="login.php";</script>
    
    <?php
    }

?>