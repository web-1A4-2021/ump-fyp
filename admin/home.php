<?php
include_once '../include/config.php';
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
            <td>".uId($row).$row['userid']."</td>
            <td>".uRole($row)."</td>
            <td>".uType($row)."</td>
            </tr>";
    }
    echo "</table>";
}
function uId($row)
{
    if($row['userid']<10)
    {
        return 'UMPFYP0000';
    }
    else if($row['userid']<100)
    {
        return 'UMPFYP000';
    }
    else if($row['userid']<1000)
    {
        return 'UMPFYP00';
    }
}
function uRole($row)
{
    switch($row['userrole'])
    {
        case 'adm':
            return 'Admin';
            break;
        case 'coo':
            return 'Coordinator';
            break;
        case 'sup':
            return 'Supervisor';
            break;
        case 'eva':
            return 'Evaluator';
            break;        
        case 'fyp1':
            return 'FYP1 Student';
            break;
        case 'fyp2':
            return 'FYP2 Student';
            break;
        case 'lec':
            return 'Lecturer';
            break;
        case 'std':
            return 'Student';
            break;
    }
}
function uType($row)
{
    switch($row['usertype'])
    {
        case 'lec':
            return 'Lecturer';
            break;
        case 'std':
            return 'Student';
            break;
        case 'ext':
            return 'External User';
            break;
    }
}