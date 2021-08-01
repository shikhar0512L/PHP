<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

// CREATING A CONNECTION
$con = mysqli_connect($server, $username, $password);


    // Check for connection success
if(!$con){
    die("connection to this database failed due to " . mysqli_connect_error());

};
    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `mail`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other ', current_timestamp()); ";
echo $sql;


    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <script src="project.js"></script>
    <link rel="stylesheet" href="project.css">
</head>
<body>
   <img src="index.jpg" alt="backGround" class ="bg">
    <div class="container">
        <h1>Welcome to MPVMGG US Trip form</h3>
            <p>Enter your details and submit this form to confirm your participation in the trip </p>




            
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="text" name="age" id="age" placeholder="Enter your Age">
                <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
                <button class="btn">Submit</button> 
            </form>

    </div>
</body>
</html>

