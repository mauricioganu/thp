<?php
include("conexion.php");

if($_GET) {
    $f_autor = $_GET['autor'];
    $f_titulo = $_GET['titulo'];
    $f_precio = $_GET['precio'];
    $f_genero = $_GET['genero'];
    $f_cantidad = $_GET['cantidad'];

     
    $sql = "INSERT INTO libros (autor, titulo, precio, genero, cantidad ) VALUES ('$f_autor', '$f_titulo','$f_precio','$f_genero','$f_cantidad')";
    if($conn->query($sql) === TRUE) {
        echo "<p>Alta creada</p>";
        echo "<a href='../TPFinal/index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }
 
    $conn->close();
}

