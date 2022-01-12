<?php

    $con=mysqli_connect('localhost','root','','shah');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>