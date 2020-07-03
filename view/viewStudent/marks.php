<?php 
    
    include '../../model/db_school_con.php';
    $connection = setConnection();

    session_start();

    if(isset($_SESSION['id'])){
        $stuId = $_SESSION['id'];

        $query = "SELECT * FROM `marks` WHERE `student_id` = '$stuId'";
        $result = mysqli_query($connection, $query);

       

        /*
        
        
        $address = $row['student_address'];
        $grade = $row['student_grade'];
        $number = $row['student_phone'];*/
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div class="container my-5" id="tourpackages-carousel">
      <div class="row">
        <div class="col-lg-12"><h1>Results</h1></div>
        <?php 
            while($row = mysqli_fetch_assoc($result)){

                $id = $row['student_id'];
                $topic = $row['topic'];
                $mark = $row['student_marks'];
                $grade = $row['grade']; 
        ?>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="thumbnail">
              <div class="caption">
                <div class='col-lg-12 well well-add-card'>
                    <h4><?php echo $topic ?></h4>
                </div>
                <div class='col-lg-12'>
                    <p><?php echo $mark ?></p>
                    <p><?php echo $grade ?></p>
                </div>
                <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card"></button> 
            </div>
          </div>
        </div>

        <?php  
                }    
            }     
        ?>

      </div><!-- End row -->
    </div><!-- End container -->
</body>
</html>