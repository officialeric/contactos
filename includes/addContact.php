<?php
session_start();
include ('db_connect.php');

if(isset($_POST['add'])){
    function validate($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }

    $name = validate($_POST['name']);
    $contact = validate($_POST['contact']);
    $user_id = $_SESSION['user_id'];
    
    $checkContact = "SELECT * FROM contacts WHERE contact='$contact' AND user_id=$user_id";
    $contactFound = mysqli_query($db,$checkContact);

    if(mysqli_num_rows($contactFound) > 0){
        header('location:../views/index.php?user_id='.$user_id.'&msg=Contact already exists');
        exit();
    }else{
        $createContact = "INSERT INTO contacts(contact_name,contact,user_id) VALUES('$name','$contact',$user_id)";
        $contactCreated = mysqli_query($db,$createContact);

        if($contactCreated){
            header('location:../views/index.php?user_id='.$user_id.'&msg=Contact Added successfully');
            exit();
        }else{
            header('location:../views/index.php?user_id='.$user_id.'&msg=failed to add contact');
            exit(); 
        }
    }
}