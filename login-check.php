<?php 
session_start(); 
include "connection.php"; 
$con = connection();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) { 
        header("Location: login.php?error=Username is required"); 
        exit();
    }else if(empty($password)){ 
        header("Location: login.php?error=Password is required"); 
        exit();
    }else{
        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $con->query($sql) or die($con->error); 

        if (mysqli_num_rows($result) === 1) { 
            $row = mysqli_fetch_assoc($result); 

            if ($row['username'] === $username && $row['password'] === $password && $row['typeID'] == '1' ) { 
                header("Location: Homepage.html"); 
                exit();
            
            }else if ($row['username'] === $username && $row['password'] === $password && $row['typeID'] == '2' ) {
                header("Location: Hospital.php"); 
                exit();
            
            }else if ($row['username'] === $username && $row['password'] === $password && $row['typeID'] == '3' ) {
                header("Location: Homepage2.html"); 
                exit();
            }
            else{  
                header("Location: login.php?error=Incorrect username or password");
                exit();
            }
        }else{ 
            header("Location: login.php?error=Incorrect username or password");
            exit();
        }
    }
    
}else if (isset($_POST['register'])){
        header("Location: register.php");
        exit();
}
else{
    header("Location: login.php");
    exit();
}