<?php
include ('../includes/query.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactos | Home</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class='main'>
<div class="contain">
    <div class="top">
        <div class=""></div>
        <div class="menu">

        <div class="dropdown">
        <span class="material-symbols-outlined">
        sort
        </span>
        <div class="dropdown-content">
            <div class="m-2">
            <a href="index.php?user_id=<?=$user_id?>">Home</a><br>
            </div>
            <div class="m-2">
            <a href="profile.php?user_id=<?=$user_id?>">My Profile</a><br>
            </div>
            <div class="m-2">
            <a href="../includes/logout.php">Log Out</a>
            </div>
        </div>
        </div>

        
        </div>
    </div>