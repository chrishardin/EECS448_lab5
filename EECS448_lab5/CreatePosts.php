<?php



$mysqli = new mysqli("mysql.eecs.ku.edu", "christopherhardi", "password", "christopherhardi");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST['username'];
$post = $_POST['post'];


if ($username == '') {
	echo "You have entered a blank user id. Please fix. "
	exit(); } 

if ($post == '') {
echo "post is blank";
exit();
}
	

$i = $mysqli->query("INSERT INTO Posts (author_id, content) VALUES ('$username', '$text')");

if($i) {
echo "record has been stored"; }
else {
echo "Did not work. ";
exit();
 }
$mysqli->close();


?>