<?php 

	$conexion=mysqli_connect('localhost','root','','test');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>E-mail</td>
			<td>Telefono</td>	
			<td>Asunnto </td>
		</tr>

		<?php 
		$sql="SELECT * from test_wb";
		
		$result = mysqli_query ($conexion,$sql);

		WHILE ($mostrar=mysqli_fetch_array( $result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Apellido'] ?></td>
			<td><?php echo $mostrar['Telefono'] ?></td>
			<td><?php echo $mostrar['Email'] ?></td>
			<td><?php echo $mostrar['Asunto'] ?></td>
			<td><<a href="admint.php">Eliminar  </td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>