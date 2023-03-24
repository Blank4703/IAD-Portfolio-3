<?php
    $userName = $_POST['usern'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $conn = new mysqli('localhost','u-220213303','axLESwFgJz0bpg5','u_220213303_portfolio3');
    if($conn->connect_error){
        die('Connection Error: '.$conn->connect_error);
    }else{
        $insert = $conn->prepare("INSERT INTO users(username,password,email) values(?,?,?)");
        $insert->bind_param("sss",$userName,$password,$email);
        $insert->execute();
        echo "<script>alert('Registration Complete!')</script>";
        $insert->close();
        $conn->close();
    }
?>