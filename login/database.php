<?php

$host = "10.2.3.104";
$dbname = "arsoppgave";
$username = "kristian";
$password = "balls";

$mysqli = new mysqli (hostname: $host,
                        username: $username,
                        password: $password,
                        database: $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;