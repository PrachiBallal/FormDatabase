<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FORM</title>
  </head>
  <body>

<div >
<h1>Enter your details</h1>
    <form action="form3.php" method="post">
    <div >
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" Required>
    </div>

    <div >
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" Required> 
        
    </div>
    
    <button type="submit" onclick="alert('submitted')" > Submit</button>
    
    </form>
</div>

    
  </body>
    
</html>


  
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "mydatabase";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `entries` (`Name`, `Email`) VALUES ('$name', '$email')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
               
        }

      }

    }

    
?>