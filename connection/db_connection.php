<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$db = mysqli_connect('localhost','root','','portfolio') or die("Database not connected");
?>