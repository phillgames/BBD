<?php

$host = "10.0.0.1";
$dbname = "arsoppgave";
$username = "root";
$password = "";

$mysqli = new mysqli (hostname: $host,
                        username: $username,
                        password: $password,
                        database: $arsoppgave);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;