<?php
$servername = "";
$username = "root";
$password = "";
$database = "taller_1";
$id = $_POST["ilidc"];
$nomc = $_POST["elnomc"];
$apc = $_POST["elapc"];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE prueba SET Nombre='$nomc', Apellido='$apc' WHERE Id_Cliente=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>