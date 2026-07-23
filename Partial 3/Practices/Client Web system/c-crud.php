<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "taller1";
$idc = $_POST["id_cliente"];
$nomc = $_POST["nombre_cliente"];
$apec = $_POST["apellido_cliente"];
// Create connection
$connex = mysqli_connect($servername, $username, $password, $database);
if (!$connex) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO clientes (id_cliente, nombre_cliente, apellido_cliente) VALUES ('$idc', '$nomc', '$apec')";
if (mysqli_query($connex, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connex);
}
mysqli_close($connex);
?>
