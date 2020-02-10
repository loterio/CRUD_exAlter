CREATE DATABASE exAlt;
DROP DATABASE exAlt;

USE exAlt;

CREATE TABLE marca (
  codigo int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  descricao varchar(255) DEFAULT NULL
);

INSERT INTO marca(descricao) VALUES 
('LG'),
('DELL'),
('SONY'),
('SAMSUNG'),
('ASUS');
SELECT * FROM marca;
DROP TABLE marca;

CREATE TABLE produto (
codigo int auto_increment primary key,
descricao varchar(200),
valor double,
qtdEstoque int
);

INSERT INTO produto(descricao, valor, qtdEstoque) VALUES 
('PC gamer',7499,10),
('Mouse RAZER',1200,700),
('Webcam do Mickey',100,25000);

SELECT * FROM produto;
DROP TABLE produto;