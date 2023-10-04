
<?php
session_start();
include ('db_connect.php');

if(isset($_POST['edit'])){
    $contact_id = $_POST['contact_id'];
    $user_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    $sql = "UPDATE contacts SET contact_name='$name', contact='$contact' WHERE contact_id=$contact_id AND user_id=$user_id";
   if(mysqli_query($db,$sql)){
    header('location:../views/index.php?msg=Contact edited successfully');
    exit();
   }
}