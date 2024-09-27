create database e_ao_quadrado;
use e_ao_quadrado;

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

create table minha_loja(
    id_loja int auto_increment primary key,
    nome_loja varchar(100) not null,
    email varchar(255) not null,
    cep varchar(9) not null,
    telefone varchar(14) not null,
    id_endereco int,
    cpf_cnpj varchar(14) unique not null,
    loja_imagem varchar(255),
    foreign key fk_endereco(id_endereco) references enderecos(id_endereco)
);
