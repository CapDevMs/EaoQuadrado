create database e_ao_quadrado;
use e_ao_quadrado;

create table usuario(
    id_usuario primary key unsigned auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null unique,
    senha varchar(255) not null
);

CREATE TABLE admin (
	id_administrador INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    FOREIGN KEY fk_usuario(id_usuario) REFERENCES usuarios(id_usuario) 
);

CREATE TABLE edit_site(
    id_edit_site INT AUTO_INCREMENT PRIMARY KEY,
    id_elemento_site VARCHAR(100),
    texto_elemento varchar(255),
    imagem_elemento varchar(255)
);