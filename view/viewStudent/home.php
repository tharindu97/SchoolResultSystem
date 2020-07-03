<?php
    include '../../model/db_school_con.php';
    $connection = setConnection();

    session_start();

    if(isset($_SESSION['id'])){
        $stuId = $_SESSION['id'];

        $query = "SELECT * FROM `tbl_student` WHERE `student_id` = '$stuId'";
        $result = mysqli_query($connection, $query);

        $row = mysqli_fetch_assoc($result);

        $id = $row['student_id'];
        $fname = $row['student_f_name'];
        $lname = $row['student_l_name'];
        $address = $row['student_address'];
        $grade = $row['student_grade'];
        $number = $row['student_phone'];
    }

    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Result</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <style>
        body {
        background:linear-gradient(90deg, #e8e8e8 50%, #3d009e 50%);
        }

        a{
            color: white;
        }

        .portfolio {
        padding:6%;
        text-align:center;
        }

        .heading {
        background:#fff;
        padding:1%;
        text-align:left;
        box-shadow:0px 0px 4px 0px #545b62;
        }

        .heading img {
        width:10%;
        }

        .bio-info {
        padding:5%;
        background:#fff;
        box-shadow:0px 0px 4px 0px #b0b3b7;
        }

        .name {
        font-family:'Charmonman', cursive;
        font-weight:600;
        }

        .bio-image {
        text-align:center;
        }

        .bio-image img {
        width:350px;
        height:350px;
        border-radius:50%;
        }

        .bio-content {
        text-align:left;
        }

        .bio-content p {
        font-weight:600;
        font-size:30px;
        }   
    </style>
</head>
<body>
           
    <div class="container portfolio">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">	<img src="https://image.ibb.co/cbCMvA/logo.png" />
                </div>
            </div>	
        </div>
        <div class="bio-info">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bio-image">
                                <img src="http://raviyafitness.com/wp-content/uploads/2018/05/IMG_20180101_164242_HDR.jpg" alt="image" />
                            </div>			
                        </div>
                    </div>	
                </div>
                <div class="col-md-6">
                    <div class="bio-content">
                        <h1><?php echo $fname ?> <?php echo $lname ?></h1>
                        <h6>Student ID: <?php echo $id ?></h6>
                        <h6>Address: <?php echo $address ?></h6>
                        <h6>Grade: <?php echo $grade ?></h6>
                        <h6>Contact: <?php echo $number ?></h6>
                        <button class="btn btn-warning"><a href="marks.php" ><i class="fa fa-download"></i>Marks</a></button>
                        <button class="btn btn-danger"><a href="../../controller/logout/logout.php" >Logout</a></button>
                    </div>
                </div>
            </div>	
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>