CREATE DATABASE EAoQuadrado;
USE EAoQuadrado;

CREATE TABLE Lojas (
idloja INT PRIMARY KEY
);

CREATE TABLE Categorias (
idcategoria INT PRIMARY KEY,
nome VARCHAR (255),
descricao VARCHAR (100)
);


CREATE TABLE Produtos (
    idproduto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR (255),
    marca VARCHAR(100),
    preco DECIMAL(10, 2) NOT NULL,
    imagens JSON,  
    cores VARCHAR(255),  
    quantidade INT NOT NULL,
    loja INT,  
    categoria INT,  
    frete DECIMAL(10, 2),  
    FOREIGN KEY (loja) REFERENCES Lojas(idloja),  
    FOREIGN KEY (categoria) REFERENCES Categorias(idcategoria)  
);





