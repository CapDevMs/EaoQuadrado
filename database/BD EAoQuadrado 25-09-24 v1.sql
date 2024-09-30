CREATE DATABASE EAoQuadrado;

USE EAoQuadrado;

CREATE TABLE Lojas (
    id_loja INT PRIMARY KEY auto_increment
);

CREATE TABLE Categorias (
    id_categoria INT PRIMARY KEY auto_increment,
    nome VARCHAR(255),
    descricao VARCHAR(100)
);

CREATE TABLE Produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR(255),
    marca VARCHAR(100),
    preco DECIMAL(10, 2) NOT NULL,
    imagens JSON,
    cores VARCHAR(255),
    quantidade INT NOT NULL,
    id_loja INT,
    id_categoria INT,
    frete DECIMAL(10, 2),
    FOREIGN KEY fk_loja(id_loja) REFERENCES Lojas(id_loja),
    FOREIGN KEY fk_categoria(id_categoria) REFERENCES Categorias(id_categoria)
);