<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "christopherhardi", "password", "christopherhardi");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
/*
$username = $_POST['username'];

if ($username == '') {
	echo "You have entered a blank user id. Please fix. "
	exit(); } 
else {
	

	$i = $mysqli->query("INSERT INTO Users (user_id) VALUES ('$username')");

	if($i == TRUE) {
	echo "record has been stored"; }
	else {
	echo"Did not work. " . $i ;
	exit();

 } }



$i -> free();
$mysqli->close();
?>