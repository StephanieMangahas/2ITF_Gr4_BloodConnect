<?php

if(!isset($_SESSION)){  
    session_start(); 
}

include_once("connection.php"); 
$con = connection();

if(isset($_POST['submithospital'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $typeID = '2';

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result); 

    if($num ==  1) {
        echo "Username already taken!"; 

    }else { 
        $reg = "INSERT INTO users(fname, lname, username, password, typeID) VALUES ('$fname','$lname','$username', '$password', '$typeID')"; //this query will store the information to the database as another user
        mysqli_query($con,$reg);
        header("Location: Hospital.php"); 
    }

}

if(isset($_POST['submitdonor'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $typeID = '3';

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    if($num ==  1) {
        echo "Username already taken!";

    }else {
        $reg = "INSERT INTO users(fname, lname, username, password, typeID) VALUES ('$fname','$lname','$username', '$password', '$typeID')";
        mysqli_query($con,$reg);
        header("Location: Homapage2.html");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="BC_logo.png" />
    <link rel="stylesheet" href="register.css"> 
    <title>Registration</title>
</head>
<body>
    
    <section class="header">
        <nav>
            <a href=""><img src="BC_logo.png" alt="tms logo"></a> 
        </nav>

        <div class="login-container">
        <a href="HomePage.html"> <- HOME</a>

        <h2>Register NOW!</h2>
            
<form action="" method="post">
    <div class="form-element">

            <input type="text" name="fname" id="fname" placeholder = "First Name">

            <input type="text" name="lname" id="lname" placeholder = "Last Name">

            <input type="text" name="username" id="username" placeholder = "Username">  

            <input type="password" name="password" id="password" placeholder = "Password">

    </div>
        <button type="submit" name="submithospital"> 
            REGISTER AS A HOSPITAL
        </button>
        <button type="submit" name="submitdonor"> 
            REGISTER AS DONOR
        </button>
    </div>
</form>
    </section>

</body>
</html>