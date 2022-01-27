<?php
//* Connect to database
include_once "../include/config.php";
$userid = $_POST['userid'];
$edit = "SELECT * FROM userinfo WHERE userid='$userid'";
$evalue = mysqli_query($conn,$edit);
$row = mysqli_fetch_array($evalue);
if($row>0)
{
    echo "<script>console.log('user trace success');</script>";
    //! don't need header("location:../admin/admin.php?home=true");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

//! not working
/*
if($row['userrole']=='adm')
{$typeselect[0] = "<option value='adm'>Admin</option>";}
else{$typeselect[0]="<option value='adm'>Admin</option>";}

if($row['userrole']=='coo')
{$typeselect[1] = "<option value='coo' selected>Coordinator</option>";}
else{$typeselect[1]="<option value='coo'>Coordinator</option>";}
   
if($row['userrole']=='sup')
{$typeselect[2] = "<option value='sup' selected>Supervisor</option>";}
else{$typeselect[2]="<option value='sup'>Supervisor</option>";}
   
if($row['userrole']=='eva')
{$typeselect[3] = "<option value='eva' selected>Evaluator</option>";}
else{$typeselect[3]="<option value='eva'>Evaluator</option>";}
      
if($row['userrole']=='fyp1')
{$typeselect[4] = "<option value='fyp1' selected>FYP1 Student</option>";}
else{$typeselect[4]="<option value='fyp1'>FYP1 Student</option>";}
   
if($row['userrole']=='fyp2')
{$typeselect[5] = "<option value='fyp2' selected>FYP2 Student</option>";}
else{$typeselect[5]="<option value='fyp2'>FYP2 Student</option>";}
   
if($row['userrole']=='lec')
{$typeselect[6] = "<option value='lec' selected>Lecturer</option>";}
else{$typeselect[6]="<option value='lec'>Lecturer</option>";}
   
if($row['userrole']=='std')
{$typeselect[4] = "<option value='std' selected>Coordinator</option>";}
else{$typeselect[4]="<option value='std'>Coordinator</option>";}
*/

echo "<a class='button' href='../admin/admin.php?home=true'>Home</a>";
echo "
    <form action='../function/edit.php' method='post'>
        <label for='userid'>User ID</label>
        <input type='text' name='userid' value='".$row['userid']."' readonly><br>
        <label for='matricid'>Matric ID</label>
        <input type='text' name='matricid' value='".$row['matricid']."'><br>
        <label for='userrole'>User Role</label>
        <select name='userrole' id='userrole' value='".$row['userrole']."'>
            <option value='adm'>Admin</option>
            <option value='coo'>Coordinator</option>
            <option value='sup'>Supervisor</option>
            <option value='eva'>Evaluator</option>
            <option value='fyp1'>FYP1 Student</option>
            <option value='fyp2'>FYP2 Student</option>
            <option value='lec'>Lecturer</option>
            <option value='std'>Student</option>
        </select><br>
        <label for='usertype'>User Type</label>
        <select name='usertype' id='usertype' value='".$row['usertype']."'>
            <option value='ext'>External User</option>
            <option value='lec'>Lecturer</option>
            <option value='std'>Student</option>
        </select><br>
        <input class='button' type='submit' value='Update'>
    </form>
    ";
?>
<head>
    <link href="../css/layout.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../css/sidebar.css" type="text/css" rel="stylesheet" media="screen,projection">
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
    <script>
        //document.getElementsByTagName('style')[0].firstChild.data;
    </script>
</head>