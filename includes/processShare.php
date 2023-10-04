<?php
session_start();
include ('db_connect.php');

if(isset($_GET['denied'])){
   $contact_id = $_GET['contact_id'];

   $sql = "UPDATE shared SET status='denied'";
   if(mysqli_query($db,$sql)){
    header('location:../views/index.php');
    exit();
   }
}
if(isset($_GET['accepted'])){
    $contact_id = $_GET['contact_id'];
    $user_id = $_SESSION['user_id'];
    $contact_name = $_GET['contact_name'];
    $contact = $_GET['contact'];
 
    $sql = "UPDATE shared SET status='accepted'";
    if(mysqli_query($db,$sql)){
        $add = "INSERT INTO contacts(contact_name,contact,user_id) VALUES('$contact_name','$contact',$user_id)";
        if(mysqli_query($db,$add)){
            header('location:../views/index.php');
            exit();
        }
    
    }
 }
