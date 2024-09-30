create database e_ao_quadrado;
use e_ao_quadrado;

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