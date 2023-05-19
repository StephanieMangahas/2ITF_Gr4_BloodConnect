<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $conn= mysqli_connect('localhost', 'root', '', 'donation') or die("Connection Failed" .mysqli_connect_error());
        if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['age']) && isset($_POST['sex']) && isset($_POST['bloodtype'])&& isset($_POST['address'])&& isset($_POST['date'])){
            $firstname= $_POST['firstname'];
            $lastname= $_POST['lastname'];
            $age= $_POST['age'];
            $sex= $_POST['sex'];
            $bloodtype= $_POST['bloodtype'];
            $address= $_POST['address'];
            $date= $_POST['date'];
            
            $sql= "INSERT INTO form (firstname, lastname, age, sex, bloodtype, address, date) VALUES ('$firstname', '$lastname', '$age', '$sex', '$bloodtype', '$address', '$date')";

            $query = mysqli_query($conn,$sql);
            if($query){
                header("Location: Homepage.html");
                exit;
            }
            else{
                echo '<h1 style="text-align: center">There is a Error Occurred' . mysqli_error($conn) . 's</h1>';
            }
        }
    }