<?php
 session_start();
if(isset($_POST['submit'])){
   
   
    include_once 'dbh.inc.php';
    
    
    $user =  $_POST['email'];
    $pwd =  $_POST['pass'];
    $hashed = password_hash($pwd, PASSWORD_DEFAULT);
    //Insert into databases
    $sql = "SELECT * FROM userdata WHERE user='$user'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck>0){
        header("Location: ../signup.php?signup=usertaken");
        exit();
    }
    
    $sql = "INSERT INTO userdata (user,pwd) VALUES ('$user','$hashed')";
     mysqli_query($conn, $sql);
     header("Location: ../Web/Home/home.php");
     exit(); 
    }    
else{
    header("Location: ../signup.php");
    exit();
}