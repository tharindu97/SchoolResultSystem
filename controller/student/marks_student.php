<?php
    include '../../model/db_school_con.php';

    $studenId = $_POST['txtStudentId'];
    $topic = $_POST['txtTopic'];
    $mark = $_POST['txtMark'];
    $grade = $_POST['txtGrade'];
    

   // runMySqlQuery("INSERT INTO `marks`(`student_id`, `topic`, `student_marks`, `grade`) VALUES ('$studenId','$topic','$mark','$grade')");

    $connection = setConnection();
    $mySqlCommand = "INSERT INTO `marks`(`student_id`, `topic`, `student_marks`, `grade`) VALUES ('$studenId','$topic','$mark','$grade')";

        try {
           if(mysqli_query($connection, $mySqlCommand)){
                echo "Succefully....!";
                header('Location: ../../view/student/marks_student.html');
           }
           else{
               echo "Error: ". mysqli_error($connection);
           }
        } catch (Exception $e) {
            
            echo "Caught exception: ", $e->getMessage(), "\n";

        } finally {

            mysqli_close($connection);

        }
    
?>