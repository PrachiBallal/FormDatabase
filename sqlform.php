<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Enter you details </h2>
    <form action="sqlform.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="firstname">First Name:</label>
                </td>
                <td>
                    <input type="text" placeholder ="First Name" name="firstname">
                </td>
            </tr>
            <tr>
                <td>
                   <label for="lastname"> Last Name:</label>
                </td>
                <td>
                    <input type="text" placeholder ="Last Name" name="lastname">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                    
                </td>
                <td>
                    <input type="mail" placeholder ="e-mail" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mobile">Mobile:</label>
                    
                </td>
                <td>
                <input type="tel" id="phone" placeholder ="Mobile Number" name="mobile" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="Submit" value ="Submit" name="submit">
                </td>
            </tr>
        </table>
        <?php
             if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Variables to be inserted into the table
                $fname = $_POST['firstname'];
                $lname = $_POST['lastname'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];

                // Connecting to the Database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "dbform";

                // Create a connection
                $conn = mysqli_connect($servername, $username, $password, $database);
                // Die if connection was not successful
                if (!$conn){
                    die("Sorry we failed to connect: ". mysqli_connect_error());
                }
                else{
                
                    //Submit these to database
                    $sql = "INSERT INTO `employees` (`First Name`, `Last Name`, `Email`, `Mobile`) VALUES ('$fname', '$lname', '$email', '$mobile')";
                    $result = mysqli_query($conn, $sql);

                    // Add a new trip to the Trip table in the database
                    if($result){
                        echo "The record has been inserted successfully!<br>";
                    }
                    else{
                        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                    }
                }
            }
        ?>
    </form>
</body>
</html>

