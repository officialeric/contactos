<?php
session_start();
include ('db_connect.php');

$user_id = $_SESSION['user_id'];

//selecting all contacts
$selectContacts = "SELECT * FROM contacts WHERE user_id=$user_id";
$contacts = mysqli_query($db,$selectContacts);


//selecting logged user
$selectLoggedUser = "SELECT * FROM users WHERE user_id=$user_id";
$userSelected = mysqli_query($db,$selectLoggedUser);

if(mysqli_num_rows($userSelected) == 1){
    $logged_user = mysqli_fetch_assoc($userSelected);
}

if(isset($_GET['contact_id'])){
    $id = $_GET['contact_id'];
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM contacts WHERE user_id=$user_id AND contact_id=$id";
    $contactse = mysqli_query($db,$sql);

    if(mysqli_num_rows($contactse) == 1){
        $contact = mysqli_fetch_assoc($contactse);
    }
}

$selectUser = "SELECT * FROM users WHERE NOT user_id=$user_id";
$allUsers = mysqli_query($db,$selectUser);

$selectshare = "SELECT * FROM shared WHERE user_to=$user_id AND status='pending'";
$selected = mysqli_query($db,$selectshare);
$status;

if(mysqli_num_rows($selected) > 0){
    $row = mysqli_fetch_assoc($selected);
    $shared_contact = $row['contact_shared'];

    $sql = "SELECT * FROM contacts WHERE contact_id=$shared_contact";
    $Contacts = mysqli_query($db,$sql);
    if(mysqli_num_rows($Contacts) == 1){
        $contactShared = mysqli_fetch_assoc($Contacts);
        $status = true;
    }
}else{
    $status = false;
}

