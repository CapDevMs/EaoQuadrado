create database e_ao_quadrado;
use e_ao_quadrado;

create table usuarios(
    id primary key unsigned auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null unique,
    senha varchar(255) not null
);