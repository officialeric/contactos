<?php
session_start();
include ('db_connect.php');

if(isset($_POST['share'])){
    $user_from = $_SESSION['user_id'];
    $user_to = $_POST['choosenContact'];
    $contact_shared = $_POST['contact_id'];

    $sql = "INSERT INTO shared(contact_shared,user_from,user_to) VALUES($contact_shared,$user_from,$user_to)";
    $shared = mysqli_query($db,$sql);


    if($shared){
      header('location:../views/index.php?shared');
      exit();
    }
}