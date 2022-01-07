<?php
        
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        // $language = $_POST['language'];
    
        // Connecting to the Database 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mydb";
    
        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
    
        // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }
        else{ 
            // Submit these to a database
            // Sql query to be executed 
            $sql = "INSERT INTO `entries` (`fn`, `ln`, `age`, `email`, `gender`) VALUES ('$fname', '$lname', '$age', '$email', '$gender')";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "Data entry complete";   
            }
        }
    }  
?>