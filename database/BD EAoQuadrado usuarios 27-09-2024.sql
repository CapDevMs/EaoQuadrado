USE EAoQuadrado;

CREATE TABLE Cliente (
	idcliente INT AUTO_INCREMENT PRIMARY KEY,
    idusuario INT,
    FOREIGN KEY (idusuario) REFERENCES Usuarios(idusuario) 
);

CREATE TABLE Vendedor (
	idvendedor INT AUTO_INCREMENT PRIMARY KEY,
    idusuario INT,
    FOREIGN KEY (idusuario) REFERENCES Usuarios(idusuario) 
);

CREATE TABLE Administrador (
	idadministrador INT AUTO_INCREMENT PRIMARY KEY,
    idusuario INT,
    FOREIGN KEY (idusuario) REFERENCES Usuarios(idusuario) 
);

CREATE TABLE Usuarios (
    idusuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);



