<html>
<head>
<title>Problema</title>
</head>
<body>

<?php
 
$nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $tel = $_REQUEST['tel'];
        $mail = $_REQUEST['mail'];
        $asunto = $_REQUEST['asunto'];
        
        $server = "localhost";
        $usuario = "usuario";
        $contra = "contrasena";
        $nombredb = "test";
        
        $conexion = new mysqli($server, $usuario, $contra, $nombredb);
        
        if ($conexion->connect_error) {
            die("no se pudo conectar a la base de datos");
        }
        $sql = "INSERT INTO test_wb (nombre, apellido, telefono, email, asunto) VALUES 
        ('{$nombre}', '{$apellido}', '{$tel}', '{$mail}', '{$asunto}')";
        if ($conexion->query($sql) === TRUE) {
            echo "Se agrego correctamente a la abse de datos";
        } else {
            echo "Nos e pudo agregar a la base de datos." . $conexion->error;
        }
        $conexion->close();
    ?>
</body>
</html>
