<?php
    include '../../model/db_school_con.php';

    $sId = $_POST['txtStudentId'];
    runMySqlQuery("DELETE FROM `tbl_student` WHERE `student_id` = '$sId'");
?>