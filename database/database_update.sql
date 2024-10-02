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
	estado varchar(100),
    sigla varchar(2)
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
		cep varchar(8) NOT NULL,
		endereco varchar(100) NOT NULL,
		bairro varchar(100) NOT NULL,
		complemento varchar(100),
		foreign key fk_cidade(id_cidade) references cidades(id_cidade)
);

CREATE TABLE clientes (
    id_cliente int auto_increment primary key,
    nome varchar(50) not null,
    sobrenome VARCHAR(100) NOT NULL,
    nascimento DATE NOT NULL,
    cpf varchar(11) not null,
    numero_telefone VARCHAR(12) not null,
    email varchar(200) unique not null,
    senha varchar(150) not null,
    id_endereco int,
    id_sexo int,
    foreign key fk_endereco(id_endereco) references enderecos(id_endereco),
    foreign key fk_sexo(id_sexo) references sexos(id_sexo)
);

CREATE TABLE cargo (
    id_cargo INT PRIMARY KEY AUTO_INCREMENT,
    cargo VARCHAR(100) not null
);
 
CREATE TABLE permissao (
    id_permissao INT PRIMARY KEY AUTO_INCREMENT,
    permissao varchar (100) not null,
    descricao varchar (255) not null
);
 
CREATE TABLE val_colaborador (
    id_validacao INT PRIMARY KEY AUTO_INCREMENT,
	FOREIGN KEY (id_vendedor) REFERENCES vendedor(id_vendedor),
    observacao varchar (255)
);
 
CREATE TABLE status_vendedor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    status ENUM('aprovado', 'reprovado') NOT NULL,
    data_validacao DATETIME
);
 
DELIMITER //
CREATE TRIGGER valida_vendedor
AFTER INSERT ON vendedores
FOR EACH ROW
BEGIN
    IF NEW.status NOT IN ('aprovado', 'reprovado') THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Status do vendedor deve ser "aprovado" ou "reprovado".';
    END IF;
 
    SET NEW.data_validacao = NOW();
END;
//
DELIMITER ;

CREATE TABLE chamado (
	id_chamado int auto_increment primary key,
	FOREIGN KEY (id_vendedor) REFERENCES vendedor(id_vendedor),
	FOREIGN KEY (id_clinte) REFERENCES cliente(id_cliente)
);

create table administrador(
    id_adm int primary key auto_increment,
    id_usuario varchar(255) not null,
    email varchar(255) not null unique,
    senha varchar(255) not null,
    nome_adm varchar(100) not null,
    sobrenome_adm varchar(100) not null,
    data_nasc date not null,
    cpf int not null unique, 
    FOREIGN KEY (id_cargo) REFERENCES cargo(id_cargo)
);

CREATE TABLE relpermissao (
	id_relpermissao INT PRIMARY KEY AUTO_INCREMENT,
	FOREIGN KEY (id_adm) REFERENCES administrador(id_adm),
	FOREIGN KEY (id_permissao) REFERENCES permissao(id_permissao)
);

CREATE TABLE cliente (
	id_cliente int auto_increment primary key,
    email varchar(255) not null unique,
    senha varchar(255) not null,
    nome_cli varchar(100) not null,
    sobrenome_cli varchar(100) not null,
    data_nasc date not null,
    cpf int not null unique
);