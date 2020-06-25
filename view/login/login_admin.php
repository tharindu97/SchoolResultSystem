<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color: black;
        }
    </style>
</head>
<body>
    
    <div class="container"><!-- Container -->
        <div class="row"><!-- Row 1 -->
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card my-5"><!-- Card -->
                    <div class="card-body"><!-- Card Body -->
                        <h5 class="text-center my-2">:#: Result System :#:</h5>
                        <form action="controller/login/login_student.php" class="form" role="form" method="POST">
                            
                            <div class="my-3"><!-- txtusername -->
                                <input type="text" class="form-control" id="txtStudentId" name="txtStudentId" placeholder="Student Number">
                            </div><!-- End of txtusername -->

                            <div class="my-4"><!-- button -->
                                <button id="btnLogin" class="btn btn-danger btn-block text-uppercase" type="submit" name="sub">Admin Login</button>
                            </div><!-- End of button -->

                            <hr class="my-4">
                            <h6>Login By Student <a href="../../index.php">Click herer</a></h6>

                        </form><!-- End of form -->
                    </div><!-- End of Card Body-->
                </div><!-- End of Card -->
            </div><!-- End of div -->
        </div><!-- End of Row 1 -->
    </div><!-- End of Container -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>

    //btnLogin
    $('#btnLogin').click(
        function(){
            inputValidation();
    });
    // End of btnLogin

    //inputValidation
    function inputValidation(callback){

        //txtStudentId Validation
        if($('#txtStudentId').val().length === 0){
            alert('Student ID can not be empty');
            return false;
        }// End of txtStudentId Validation

    }// End of inputValidation
</script>
</body>
</html>