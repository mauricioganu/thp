<?php
include("conexion.php");

if($_GET) {
    $f_titulo = $_GET['titulo'];
         
    $sql = "DELETE FROM libros WHERE titulo='$f_titulo'";
    if($conn->query($sql) === TRUE) {
        echo "<p>Registro borrado</p>";
        echo "<a href='../TPFinal/index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }
 
    $conn->close();
}
?>