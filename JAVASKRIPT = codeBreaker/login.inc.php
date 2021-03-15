<?php

$servername = 'localhost';
$username   = 'root';
$password   = '';
$db         = 'game';

// Create Connection

$con        = new mysqli($servername,$username,$password,$db);

// Check Connection

if($con->connect_error) {
    return die('Connection failed: '.$con->connect_error);
}

?>