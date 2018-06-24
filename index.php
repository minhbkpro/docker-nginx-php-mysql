<?php

$mysqli = new mysqli('mysql', 'root', 'root', 'dev', 3306);

if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
} else {
    echo 'Connected to MySQL successfully!';
}
