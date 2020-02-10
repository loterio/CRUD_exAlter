CREATE DATABASE example;
 
DROP DATABASE example;
 
USE example;

CREATE TABLE `marca` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO marca(descricao) VALUES
("LG"),
("DELL"),
("Samsung"),
("ASUS"),
("APPLE"),
("Lenovo");

SELECT * FROM marca;

DROP TABLE marca;