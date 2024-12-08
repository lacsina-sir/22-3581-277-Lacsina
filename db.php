<?php
$conn = new mysqli("localhost", "root", "", "phonebook");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
