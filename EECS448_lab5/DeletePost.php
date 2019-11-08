<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "christopherhardi", "password", "christopherhardi");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


echo "<ul>"; 

while($_POST['delete'] as $post) { 
	$i = $mysqli->query("DELETE FROM Posts WHERE post_id = '$post'");
}

if($i){
echo "post was deleted";
} 
else {
echo("Did not work."); }

echo "</ul>";
}


$mysqli->close();


?>