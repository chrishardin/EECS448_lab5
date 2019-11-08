<?php



$mysqli = new mysqli("mysql.eecs.ku.edu", "christopherhardi", "password", "christopherhardi");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST['username'];

$i = $mysqli->query("SELECT post_id, content FROM Posts WHERE author_id = '$username'");

if($i) {
printf("<ul>"); 
while($row = $i->fetch_assoc()) { 
	echo "<li> %s </li> \n", $row["content"]; // replaces %s with content in list form
}
printf("</ul>");
}
else {
echo("Did not work.");
exit();
 }

$i -> free();
$mysqli->close();


?>