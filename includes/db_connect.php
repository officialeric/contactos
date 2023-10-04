<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbh = 'contactos';

//creating new connection
$db = new mysqli($server,$username,$password,$dbh);

//checking connection
if(!$db){
    echo 'not connected';
}