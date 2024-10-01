create database e_ao_quadrado;
use e_ao_quadrado;

create table usuarios(
    id primary key unsigned auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null unique,
    senha varchar(255) not null
);

CREATE TABLE Administrador (
	id_administrador INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    FOREIGN KEY fk_usuario(id_usuario) REFERENCES Usuarios(id_usuario) 
);

CREATE TABLE edit_site(
    id_administrador int,
    FOREIGN KEY fk_administrador(id_administrador) REFERENCES Administrador(id_administrador) 

);