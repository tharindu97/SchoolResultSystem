<?php
    include '../../model/db_school_con.php';

    $fname = $_POST['txtFirstName'];
    $lname = $_POST['txtLastName'];
    $cnumber = $_POST['txtPhoneNumber'];

    runMySqlQuery("INSERT INTO `tbl_student`( `student_f_name`, `student_l_name`, `student_phone`) VALUES ('$fname','$lname','$cnumber')");
?>