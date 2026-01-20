<?php
$conn = new mysqli("localhost", "root", "", "aranbuy");

if ($conn->connect_error) {
    die("Connection failed");
}
?>
