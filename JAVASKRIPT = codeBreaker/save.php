<?php

include('login.inc.php');

//Prepared statement and parameter bind
$stmt = $con->prepare('INSERT INTO codebreaker(username,whowins,moves)VALUE(?,?,?)');
$stmt->bind_param('ssi',$username,$whowins,$moves_details);

// set parameters and execute
$username = $_POST['username'];
$whowins  = $_POST['whoWins'];
$moves_details = $_POST['moves'];

if($stmt->execute()) { 
    return"Jeah";
}
else {
 return $stmt->error;
}



$stmt->close();
$con->close();

?>