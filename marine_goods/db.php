<?php
$conn = new mysqli("localhost", "root", "", "marine_goods");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>