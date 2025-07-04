-- DROP DATABASE EAoQuadrado;
CREATE DATABASE EAoQuadrado;
USE EAoQuadrado;

CREATE TABLE Usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

create table Cidades(
    id_cidade int auto_increment primary key,
    id_estado int,
    cidade varchar(100),
    foreign key fk_estado(id_estado) references Estados(id_estado)
);

CREATE TABLE Enderecos (
    id_endereco int auto_increment primary key,
    id_cidade int,
    cep varchar(9),    
    endereco varchar(100),
    bairro varchar(100),
    complemento varchar(100),
    foreign key fk_cidade(id_cidade) references Cidades(id_cidade)
);

CREATE TABLE Sexos(
	id_sexo int auto_increment primary key ,
	sexo enum('Masculino','Feminino', 'Outro') not null
);

CREATE TABLE Clientes (
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
    id_usuario int,
    foreign key fk_endereco(id_endereco) references Enderecos(id_endereco),
    foreign key fk_sexo(id_sexo) references Sexos(id_sexo),
    foreign key fk_usuario(id_usuario) references Usuarios(id_usuario)
);

CREATE TABLE Cargos (
    id_cargo INT PRIMARY KEY AUTO_INCREMENT,
    cargo VARCHAR(100) not null
);

CREATE TABLE Administradores (
    id_administrador int primary key auto_increment,
    id_usuario int not null,
    id_cargo int,
    email varchar(255) not null unique,
    senha varchar(255) not null,
    data_nasc date not null,
    cpf varchar(18) not null unique,
    FOREIGN KEY fk_cargo(id_cargo) REFERENCES Cargos(id_cargo),
    FOREIGN KEY fk_usuario_administradores(id_usuario) REFERENCES Usuarios(id_usuario)
);

CREATE TABLE Vendedores (
    id_vendedor INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    FOREIGN KEY fk_usuario_vendedores(id_usuario) REFERENCES Usuarios(id_usuario)
);

CREATE TABLE Comentario (
    id_comentario INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente int,
    comentario VARCHAR(255) not null,
	FOREIGN KEY fk_cliente(id_cliente) REFERENCES Clientes(id_cliente)
);

create table Lojas(
    id_loja int auto_increment primary key,
    nome_loja varchar(100) not null,
    email varchar(255) not null,
    telefone varchar(14) not null,
    id_endereco int,
    cpf_cnpj varchar(14) unique not null,
    loja_imagem varchar(255),
    foreign key fk_endereco_lojas(id_endereco) references Enderecos(id_endereco)
);

CREATE TABLE Categorias (
    id_categoria INT PRIMARY KEY auto_increment,
    nome VARCHAR (255),
    imagem_categoria VARCHAR (255)
);

CREATE TABLE Produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR (255),
    marca VARCHAR(100),
    preco DECIMAL(10, 2) NOT NULL,
    imagens JSON,  
    quantidade INT NOT NULL,
    id_loja INT,  
    id_categoria INT,  
    frete DECIMAL(10, 2),  
    FOREIGN KEY fk_loja(id_loja) REFERENCES Lojas(id_loja),  
    FOREIGN KEY fk_categoria(id_categoria) REFERENCES Categorias(id_categoria)  
);

CREATE TABLE Avaliacao (
	id_avaliacao INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente int,
    id_vendedor int,
    id_produto int,
    avaliacao varchar (255),
    nota float default 0,
	FOREIGN KEY fk_cliente_avaliacao(id_cliente) REFERENCES Clientes(id_cliente),
	FOREIGN KEY fk_vendedor_avaliacao(id_vendedor) REFERENCES Vendedores(id_vendedor),
	FOREIGN KEY fk_produto_avaliacao(id_produto) REFERENCES Produtos(id_produto)
);
 
CREATE TABLE Permissoes (
    id_permissao INT PRIMARY KEY AUTO_INCREMENT,
    permissao varchar (100) not null,
    descricao varchar (255) not null
);
 
CREATE TABLE Status_Vendedor (
    id_status_vendedor INT AUTO_INCREMENT PRIMARY KEY,
    status ENUM('pendente', 'teste','aprovado', 'reprovado', 'cancelado', 'bloqueado') NOT NULL
);

CREATE TABLE Valida_Colaboradores (
    id_validacao_colaborador INT PRIMARY KEY AUTO_INCREMENT,
    id_vendedor int,
    id_status_vendedor int,
    observacao varchar (255),
	FOREIGN KEY fk_vendedor(id_vendedor) REFERENCES Vendedores(id_vendedor),
	FOREIGN KEY fk_status_vendedor(id_status_vendedor) REFERENCES Status_Vendedor(id_status_vendedor)
); 

CREATE TABLE Chamados (
	id_chamado int auto_increment primary key,
    id_vendedor int,
    id_cliente int,
	FOREIGN KEY fk_vendedor_chamados(id_vendedor) REFERENCES Vendedores(id_vendedor),
	FOREIGN KEY fk_cliente_chamados(id_cliente) REFERENCES Clientes(id_cliente)
);

CREATE TABLE Permissoes_Usuarios (
	id_permissao_usuario INT PRIMARY KEY AUTO_INCREMENT,
    id_administrador int,
    id_permissao int,
	FOREIGN KEY fk_administrador(id_administrador) REFERENCES Administradores(id_administrador),
	FOREIGN KEY fk_permissao(id_permissao) REFERENCES Permissoes(id_permissao)
);

CREATE TABLE Vendas(
    id_venda INT AUTO_INCREMENT PRIMARY KEY,
    quantidade INT,
    frete DECIMAL,
    id_produto INT,
    id_cliente INT,
    id_vendedor INT,
    FOREIGN KEY fk_produto_vendas(id_produto) REFERENCES Produtos(id_produto),
    FOREIGN KEY fk_cliente_vendas(id_cliente) REFERENCES Clientes(id_cliente),
    FOREIGN KEY fk_vendedor_vendas(id_vendedor) REFERENCES Vendedores(id_vendedor)
);

CREATE TABLE Status_Devolucao (
    id_status_devolucao int auto_increment primary key,
    status varchar(50)
);

CREATE TABLE Status_Troca (
    id_status_troca int auto_increment primary key,
    status varchar(50)
);

CREATE TABLE Devolucoes (
    id_devolucao int auto_increment primary key,
    id_venda int,
    id_produto int,
    motivo varchar(255),
    id_status_devolucao int,

    FOREIGN KEY fk_venda(id_venda) REFERENCES Vendas(id_venda),
    FOREIGN KEY fk_produto(id_produto) REFERENCES Produtos(id_produto),
    FOREIGN KEY fk_status_devolucao(id_status_devolucao) REFERENCES Status_Devolucao(id_status_devolucao)
);


CREATE TABLE Trocas (
    id_troca int auto_increment primary key,
    id_venda int,
    id_produto int,
    motivo varchar(255),
    id_status_troca int,

    FOREIGN KEY fk_venda_trocas(id_venda) REFERENCES Vendas(id_venda),
    FOREIGN KEY fk_produto_trocas(id_produto) REFERENCES Produtos(id_produto),
    FOREIGN KEY fk_status_troca(id_status_troca) REFERENCES Status_Troca(id_status_troca)
);


CREATE TABLE Mensagens (
    id_mensagem INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (100) NOT NULL,    
    email VARCHAR (100) NOT NULL,
    telefone VARCHAR(50),
    mensagem TEXT NOT NULL,
    data_envio DATETIME
);

ALTER TABLE produtos ADD COLUMN modelo VARCHAR(100);

INSERT INTO Categorias (nome, imagem_categoria)
VALUES ("Eletrônicos","assets/img/computer_icon.svg"),
("Moda","assets/img/dress_icon.svg"),
("Casa","assets/img/home_icon.svg"),
("Sports","assets/img/ball_icon.svg"),
("Acessorios","assets/img/ring_icon.svg"),
("Entretenimento","assets/img/games_icon.svg");

-- DELIMITER // 
-- CREATE TRIGGER valida_vendedor
-- AFTER INSERT ON vendedores
-- FOR EACH ROW
-- BEGIN
--     IF NEW.status NOT IN ('aprovado', 'reprovado') THEN
--         SIGNAL SQLSTATE '45000'
--         SET MESSAGE_TEXT = 'Status do vendedor deve ser "aprovado" ou "reprovado".';
--     END IF;
 
--     SET NEW.data_validacao = NOW();
-- END;
-- //
-- DELIMITER ;