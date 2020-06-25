<?php

    include '../../model/db_school_con.php';

    if(isset($_POST['sub'])){
        $stuId = $_POST['txtStudentId'];

        $con = setConnection();
        $query = "SELECT * FROM tbl_student WHERE student_id = '$stuId'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0){

            session_start();
            $_SESSION['id'] = $stuId;
            header('location: ../../view/viewStudent/home.html');
        }else{
            header('location: ../../index.php');
        }
    }
    

?>