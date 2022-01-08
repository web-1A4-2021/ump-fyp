<?php

if(!empty($_GET['file'])){

    echo "Your Supervisee not yet upload their file";
    $filename = basename($_GET['file']);
    $filepath = "files/".$filename;

    if(!empty($filename) && file_exist($filepath)){
       
        //define header
        header ("Cache-Control:public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename = $filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        //read file
        readfile($filepath);
        exit;
    }
    else{
        echo "No Result";
    }
}