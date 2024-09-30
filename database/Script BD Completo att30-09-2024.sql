CREATE DATABASE EAoQuadrado;
USE EAoQuadrado;

create table estados(
id_estado int auto_increment primary key,
estado varchar(100)
);

create table cidades(
id_cidade int auto_increment primary key,
id_estado int,
cidade varchar(100),
foreign key fk_estado(id_estado) references estados(id_estado)
);

CREATE TABLE enderecos (
id_endereco int auto_increment primary key,
id_cidade int,
cep varchar(9),    
endereco varchar(100),
bairro varchar(100),
complemento varchar(100),
foreign key fk_cidade(id_cidade) references cidades(id_cidade)
);

create table Minha_loja(
id_loja int auto_increment primary key,
nome_loja varchar(100) not null,
email varchar(255) not null,
telefone varchar(14) not null,
id_endereco int,
cpf_cnpj varchar(14) unique not null,
loja_imagem varchar(255),
foreign key fk_endereco(id_endereco) references enderecos(id_endereco)
);

CREATE TABLE Categorias (
id_categoria INT PRIMARY KEY auto_increment,
nome VARCHAR (255),
descricao VARCHAR (100)
);


CREATE TABLE Produtos (
id_produto INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255) NOT NULL,
descricao VARCHAR (255),
marca VARCHAR(100),
preco DECIMAL(10, 2) NOT NULL,
imagens JSON,  
cores VARCHAR(255),  
quantidade INT NOT NULL,
id_loja INT,  
id_categoria INT,  
frete DECIMAL(10, 2),  
FOREIGN KEY fk_loja(id_loja) REFERENCES Minha_loja(id_loja),  
FOREIGN KEY fk_categoria(id_categoria) REFERENCES Categorias(id_categoria)  
);

CREATE TABLE Usuarios (
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
senha VARCHAR(255) NOT NULL
);

CREATE TABLE Clientes (
id_cliente INT AUTO_INCREMENT PRIMARY KEY,
id_usuario INT,
FOREIGN KEY fk_usuario(id_usuario) REFERENCES Usuarios(id_usuario) 
);

CREATE TABLE Vendedores (
id_vendedor INT AUTO_INCREMENT PRIMARY KEY,
id_usuario INT,
FOREIGN KEY fk_usuario(id_usuario) REFERENCES Usuarios(id_usuario)
);

CREATE TABLE Administradores (
id_administrador INT AUTO_INCREMENT PRIMARY KEY,
id_usuario INT,
FOREIGN KEY fk_usuario(id_usuario) REFERENCES Usuarios(id_usuario)
);


