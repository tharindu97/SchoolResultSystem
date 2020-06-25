<?php 
    // function for set connection with data
    function setConnection(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_school";

        // Create Connection
        $con = new mysqli($servername, $username, $password, $dbname);

        //Check connection
        if($con->connect_error){
            die("Connection Failed: " . $con->connect_error);
        }
        //echo "Connected Successfully";

        return $con;
    }

    //function for execute mysql query
    function runMySqlQuery($mySqlCommand){
        
        $connection = setConnection();

        try {
           if(mysqli_query($connection, $mySqlCommand)){
                echo "Succefully....!";
                header('Location: ../../view/student/home.php');
           }
           else{
               echo "Error: ". mysqli_error($connection);
           }
        } catch (Exception $e) {
            
            echo "Caught exception: ", $e->getMessage(), "\n";

        } finally {

            mysqli_close($connection);

        }
    }

?>