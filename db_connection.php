<!-- db_connection.php -->
<?php


$mysqli = new mysqli("localhost", "root", "", "taskreminder_op");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
