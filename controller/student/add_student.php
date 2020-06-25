<?php
    include '../../model/db_school_con.php';

    $studenId = $_POST['txtStudentId'];
    $fname = $_POST['txtFirstName'];
    $lname = $_POST['txtLastName'];
    $address = $_POST['txtAddress'];
    $grade = $_POST['txtGrade'];
    $pnumber = $_POST['txtPhoneNumber'];

    runMySqlQuery("INSERT INTO `tbl_student`(`student_id`, `student_f_name`, `student_l_name`, `student_address`, `student_grade`, `student_phone`) 
    VALUES ('$studenId','$fname','$lname','$address','$grade','$pnumber')");
    
?>