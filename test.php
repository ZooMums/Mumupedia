<?php
$mysqli = new mysqli("localhost", "Mumu", "", "Mumupedia");
if ($mysqli->connect_errno) {
	echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->real_query("SELECT count(*) FROM News");
$res = $mysqli->use_result();
$row = $res->fetch_assoc();
echo $row["count(*)"];

/*
while ($row = $res->fetch_assoc()) {
 var_dump($row);
}
*/
