CREATE USER usuario IDENTIFIED BY 'contrasena';
DROP DATABASE IF EXISTS testdb;
CREATE DATABASE testdb;
GRANT ALL privileges ON `testdb`.* TO 'usuario'@localhost;
--(nombre, radio1, ingresos, comentarios, clave1, contrato)
CREATE TABLE Tabla (
    nombre VARCHAR(500) NOT NULL,
    radio1 VARCHAR(500) NOT NULL,
    ingresos INT,
    comentarios VARCHAR(500) NOT NULL,
    clave1 VARCHAR(500) NOT NULL,
    contrato VARCHAR(500) NOT NULL,
)
