<?php
include("conexion.php");

if($_GET) {
   
   
    $f_titulo = $_GET['titulo'];
   

?>
<HTML>
<Body>
<h2>EDITAR</h2>
<p>Titulo:<?php echo $_GET['f_titulo']; ?></p><br>
Titulo: <input type="text" name="titulo" value=<?php echo $_GET['titulo'];?>>
<br>
 <?php 
     
    $sql = "UPDATE INTO libros (titulo) VALUES ('$f_titulo')";
    if($conn->query($sql) === TRUE) {
        echo "<p>Registro modificado</p>";
        echo "<a href='../TPFinal/index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }
 
    $conn->close();
}
?>