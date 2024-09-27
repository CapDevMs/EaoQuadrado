create database e_ao_quadrado;
use e_ao_quadrado;

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

CREATE TABLE cargo (
    id_cargo INT PRIMARY KEY AUTO_INCREMENT,
    cargo VARCHAR(100) not null
);

CREATE TABLE permissao (
    id_permissao INT PRIMARY KEY AUTO_INCREMENT,
    permissao varchar (100) not null,
    descricao varchar (255) not null
);

CREATE TABLE relpermissao (
FOREIGN KEY (id_adm) REFERENCES administrador(id_adm),
FOREIGN KEY (id_permissao) REFERENCES permissao(id_permissao)
);
