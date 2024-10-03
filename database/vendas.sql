drop database if exists e_ao_quadrado;
create database e_ao_quadrado;
use e_ao_quadrado;

CREATE TABLE Vendas(
    id_vendas INT AUTO_INCREMENT PRIMARY KEY,
    quantidade INT,
    id_produto INT,
    id_cliente INT,
    id_vendedor INT,
    FOREIGN KEY fk_produto(id_produto) REFERENCES Produtos(id_produto),
    FOREIGN KEY fk_cliente(id_cliente) REFERENCES Clientes(id_cliente),
    FOREIGN KEY fk_vendedor(id_vendedor) REFERENCES Vendedores(id_vendedor)
);