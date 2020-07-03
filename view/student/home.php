<?php
    include '../../model/db_school_con.php';
    $connection = setConnection();
    $query = "SELECT * FROM `tbl_student`";
    $result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        a{
            color:white;
        }
    </style>
</head>
<body>
    <div class="container"><!-- Container -->
        <div> 
            <h1 class="text-center my-5">Welcome to Student Managment System</h1> 
            <button class="btn btn-success"><a href="add_student.html">New Student</a></button>
            <button class="btn btn-danger"><a href="delete_student.html" >Delete Student</a></button>
            <button class="btn btn-primary"><a href="update_student.html" >Update Student</a></button>
            <button class="btn btn-warning"><a href="marks_student.html" >Marks Student</a></button>
            <button class="btn btn-danger"><a href="../../controller/logout/logout.php" >Logout</a></button>
            <table class="table my-5">

                <tr>
                    <th>Student ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>Grade</th>
                    <th>Phone Number</th>
                </tr>

            <?php 
                while($row = mysqli_fetch_assoc($result))
                {
                    
            ?>
                <tr>
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['student_f_name']; ?></td>
                    <td><?php echo $row['student_l_name']; ?></td>
                    <td><?php echo $row['student_address']; ?></td>
                    <td><?php echo $row['student_grade']; ?></td>
                    <td><?php echo $row['student_phone']; ?></td>
                </tr>

            <?php } ?>

            </table>
        </div>

    </div> <!-- End of Container -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>