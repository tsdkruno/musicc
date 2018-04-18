<?php
session_start();

$mysqli = new mysqli("localhost", "web", "12345678", "musicc");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";
?>