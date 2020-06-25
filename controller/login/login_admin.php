<?php

    include '../../model/db_school_con.php';

    if(isset($_POST['sub'])){
        $stuId = $_POST['txtStudentId'];

        $con = setConnection();
        $query = "SELECT * FROM admin WHERE student_id = '$stuId'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0){

            session_start();
            $_SESSION['id'] = $stuId;
            header('location: ../../view/student/home.php');
        }else{
            header('location: ../../view/login/login_admin.php');
        }
    }
    

?>