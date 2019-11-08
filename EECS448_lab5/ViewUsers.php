<?php



$mysqli = new mysqli("mysql.eecs.ku.edu", "christopherhardi", "password", "christopherhardi");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$i = $mysqli->query("SELECT user_id FROM Users");

if($i) {
printf("<ul>"); 
while($row = $i->fetch_assoc()) { 
	printf("<li> %s </li> \n", $row["username"]); // replaces %s with username in list form
}
printf("</ul>");
}
else {
echo "Did not work." ;
exit();
}

$mysqli->close();


?>