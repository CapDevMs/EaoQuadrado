create database e_ao_quadrado;
use e_ao_quadrado;

create table usuarios(
    id primary key unsigned auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null unique,
    senha varchar(255) not null
);

CREATE TABLE sexos(
	id_sexo int auto_increment primary key ,
	sexo enum('Masculino','Feminino', 'Outro') not null
);

create table estados(
id_estado int auto_increment primary key,
estado varchar(100)
);

create table cidades(
id_cidade int auto_increment primary key,
id_estado int,
cidade varchar(100),
foreign key fk_estado(id_estado) references estado(id_estado)
);

CREATE TABLE enderecos (
	id_endereco int auto_increment primary key,
	id_cidade int,
	cep VARCHAR(8),    
	endereco VARCHAR(100),
	bairro VARCHAR(100),
    complemento VARCHAR(100),
    foreign key fk_cidade(id_cidade) references cidade(id_cidade)
);

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(20) NOT NULL,
    sobrenome VARCHAR(60) NOT NULL,
    nascimento DATE NOT NULL,
    cpf CHAR(11) NOT NULL,
    numero_telefone VARCHAR(12) not null,
    email varchar(100) unique not null,
    id_endereco int,
    foreign key fk_endereco(id_endereco) references endereco(id_endereco)
);



