<?php
session_start();
include ('db_connect.php');

$contact_id = $_GET['contact_id'];
$user_id = $_SESSION['user_id'];

$deleteContact = "DELETE FROM contacts WHERE contact_id=$contact_id AND user_id=$user_id";
$contactDeleted = mysqli_query($db,$deleteContact);

if($contactDeleted){
    header('location:../views/index.php?msg=Contact deleted');
    exit();
}