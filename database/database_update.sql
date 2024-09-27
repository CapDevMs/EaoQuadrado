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
	foreign key fk_estado(id_estado) references estados(id_estado)
);

CREATE TABLE enderecos (
		id_endereco int auto_increment primary key,
		id_cidade int,
		cep varchar(8),    
		endereco varchar(100),
		bairro varchar(100),
		complemento varchar(100),
		foreign key fk_cidade(id_cidade) references cidades(id_cidade)
);

CREATE TABLE clientes (
    id_cliente int auto_increment primary key,
    nome varchar(20) not null,
    sobrenome VARCHAR(60) NOT NULL,
    nascimento DATE NOT NULL,
    cpf varchar(11) not null,
    numero_telefone VARCHAR(12) not null,
    email varchar(100) unique not null,
    senha varchar(50) not null,
    id_endereco int,
    id_sexo int,
    foreign key fk_endereco(id_endereco) references enderecos(id_endereco),
    foreign key fk_sexo(id_sexo) references sexos(id_sexo)
);



