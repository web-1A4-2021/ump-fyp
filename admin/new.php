<?php
//* Connect to database
include_once '../include/config.php';
//* Form to create new user
echo "
    <form action='../function/register.php' method='post'>
        <h3>New User</h3><br>
        <label for='matricid'>Matric ID</label><br>
        <input type='text' id='matricid' name='matricid' placeholder='Matric ID'><br>
        <label for='userrole'>User Role</label>
        <select name='userrole' id='userrole'>
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
        <select name='usertype' id='usertype'>
            <option value='ext'>External User</option>
            <option value='lec'>Lecturer</option>
            <option value='std'>Student</option>
        </select><br>
        <input class='button' type='submit' value='Register'>
    </form>
    ";