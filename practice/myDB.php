<?php


    include "connDB.php";

    $myDatabase = "mydb";
    //mydatabase connection
    $conn1= mysqli_select_db($conn,$myDatabase);

    $fname = $_POST['fname'];   
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if(isset($_POST['submit'])){
        $language =$_POST['language'];
        $item='';
        foreach($language as $langSel){
            $item.=$langSel;
            $item.=" ";
        }
    }
    
    // Submit these to a database
    // Sql query to be executed 
    $sql = "INSERT INTO `entries` (`fn`, `ln`, `age`, `email`, `gender`,`Language`) VALUES ('$fname', '$lname', '$age', '$email', '$gender','$item')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Data entry complete";   
    }

?>