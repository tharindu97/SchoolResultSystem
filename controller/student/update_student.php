<?php
    include '../../model/db_school_con.php';

    $sId = $_POST['txtStudentId'];
    $fname = $_POST['txtFirstName'];
    $lname = $_POST['txtLastName'];
    $cnumber = $_POST['txtPhoneNumber'];

    runMySqlQuery("UPDATE `tbl_student` SET `student_f_name`='$fname',`student_l_name`='$lname',`student_phone`='$cnumber' WHERE `student_id` = '$sId'");
?>