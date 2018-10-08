<?php

session_start();

if (isset($_POST['submit'])){
    include 'dbh.inc.php';
     $uid = $_POST['userid'] ;  
     $pwd = $_POST['passwd'] ; 
     
    $sql = "SELECT * FROM userdata WHERE user = '$uid'";
    $result = mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    if ($resultcheck<1){
        header("Location: ../login.php?login=user");
        exit();
    }else{
        if($row=mysqli_fetch_assoc($result)){
            //de-hashing
            $hashedcheck=password_verify($pwd,$row['pwd']);
            if($hashedcheck == false){
                header("Location: ../login.php?login=pwderror");
                exit();
            }elseif($hashedcheck == true){
                //log in the user
                $_SESSION['u_id'] = $row['id'];
                //$_SESSION['username'] = $row['user'];
                //header("Location: ../login.php?login=success");
                header("Location: ../ControlPanel/controlpanel.php");
                exit();
            }
        }
    }
}else{
    header("Location: ../login.php");
}