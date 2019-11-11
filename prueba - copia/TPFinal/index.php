<?php
include("conexion.php");

$resultados = mysqli_query($conn,'SELECT * FROM libros');
// Podemos ejecutar cualquier consulta SQL, por ejemplo para ingresar usuarios en una base de datos.
echo "<table border='2'>";
echo "<tr>";
echo "<th>Autor</th>";
echo "<th>Titulo</th>";
echo "<th>Precio</th>";
echo "<th>Genero</th>";
echo "<th>Cantidad</th>";
echo "</tr>";
while($fila = mysqli_fetch_array($resultados)){
	echo "<tr>";
	echo "<td>";
	echo $fila['autor'];
	echo "</td>";

	echo "<td>";
	echo $fila['titulo'];
	echo "</td>";

	echo "<td>";
	echo $fila['precio'];
	echo "</td>";

	echo "<td>";
	echo $fila['genero'];
	echo "</td>";

	echo "<td>";
	echo $fila['cantidad'];
	echo "</td>";








	echo "<td>";
    echo "<a href='../TPFinal/Edito.php?Autor=".$fila['autor']."&Titulo=".$fila['titulo']."&Precio=".$fila['precio']."&Genero=".$fila['genero']."&Cantidad=".$fila['cantidad']."'> <img src='EDITAR.PNG'></a>";
    echo "</td>";
	echo "</tr>";
}
echo "</table>";
 $conn->close();
?>
<HTML>
<Body>
<table>
<td>
<tr>
<a href="../TPFinal/FormAlta.HTML"><img src="ALTA.PNG"></a>
</tr>

<a href="../TPFinal/FormBaja.HTML"><img src="baja.PNG"></a>
</tr>





</DIV>
</Body>



</HTML>


