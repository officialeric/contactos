
<?php
session_start();
include ('db_connect.php');

if(isset($_POST['edit'])){
    $user_id = $_SESSION['user_id'];
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET user_name='$username', user_contact='$contact',user_email='$email' WHERE user_id=$user_id";
   if(mysqli_query($db,$sql)){
    header('location:../views/profile.php?msg=Profile edited successfully');
    exit();
   }
}