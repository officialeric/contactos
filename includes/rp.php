<?php
session_start();    
include ('db_connect.php');

if(isset($_POST['register'])){
    function validate($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }

    $name = validate($_POST['name']);
    $contact = validate($_POST['contact']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    //checking if user exists
    $checkUser = "SELECT * FROM users WHERE user_email = '$email'";
    $userExists = mysqli_query($db,$checkUser);

    if(mysqli_num_rows($userExists) > 0){
        header('location:../index.php?Email address is already taken');
        exit();
    }else{

    $hashed_pwd = md5($password);
    $sql = "INSERT INTO users(user_name,user_contact,user_email,user_password) VALUES('$name',$contact,'$email','$hashed_pwd')";
    $insert_data = mysqli_query($db,$sql);

    if($insert_data){
        header('location:../login.php');
        exit();
    }else{
        header('location:../index.php?msg=Failed to register');
        exit();
    }
}
   
}

if(isset($_POST['login'])){
    function validate($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $hashed_pwd = md5($password);

    //checking if user exists
    $selectUser = "SELECT * FROM users WHERE user_email='$email' AND user_password='$hashed_pwd'";
    $userFound = mysqli_query($db,$selectUser);

    if(mysqli_num_rows($userFound) == 1){
       $user = mysqli_fetch_assoc($userFound);
       $_SESSION['user_id'] = $user['user_id'];
       $_SESSION['user_name'] = $user['user_name'];
       $_SESSION['user_email'] = $user['user_email'];

       header('location:../views/index.php');
       exit();

    }else{
        header('location:../login.php?msg=incorrect email or password');
        exit();
    }

}