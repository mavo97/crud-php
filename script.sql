CREATE DATABASE IF NOT EXISTS registros;
 
USE registros;
CREATE TABLE personas (
  id int AUTO_INCREMENT PRIMARY KEY ,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  telefono varchar(10) NOT NULL,
  edad varchar(2) NOT NULL
) 
 
 
INSERT INTO `personas`(`id`, `nombre`, `apellido`, `telefono`, `edad`) VALUES (1, 'Miguel', 'Velazquez', 
                                                                      '4811559554', '22');