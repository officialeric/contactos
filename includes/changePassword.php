<?php
session_start();
include ('db_connect.php');

if(isset($_POST['change'])){
    function validate($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }

    $op = validate($_POST['op']);
    $np = validate($_POST['np']);
    $rp = validate($_POST['rp']);
    $user_id = $_SESSION['user_id'];
    $hashed_password = md5($op);

    $sql = "SELECT * FROM users WHERE user_id=$user_id AND user_password='$hashed_password'";
    $result = mysqli_query($db,$sql);
    
    if(mysqli_num_rows($result) == 1){

        if($np !== $rp){
            header('location:../views/profile.php?msg=password mismatch');
            exit();
        }else{
            $hashed_password = md5($np);
            $update = "UPDATE users SET user_password='$hashed_password'";

            if(mysqli_query($db,$update)){
                header('location:../views/profile.php?msg=password changed successfully');
                exit(); 
            }
        }
    }else{
        header('location:../views/profile.php?msg=Incorrect Old password');
        exit();
    }

}