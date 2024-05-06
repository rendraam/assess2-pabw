<?php
$servername = "localhost";
$username = "root";
$password = " ";
$database = "assessdua_pabw";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM lowongan WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
