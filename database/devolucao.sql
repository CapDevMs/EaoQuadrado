CREATE DATABASE EAoQuadrado;

USE EAoQuadrado;

CREATE TABLE devolucao (
    id_devolucao int auto_increment primary key,
    id_venda int,
    id_produto int,
    motivo varchar(255),
    id_status_devolucao int,

    FOREIGN KEY (id_venda) REFERENCES vendas(id_venda),
    FOREIGN KEY (id_venda) REFERENCES produto(id_produto),
    FOREIGN KEY (id_status_devolucao) REFERENCES status_devolucao(id_status_devolucao)
    );

CREATE TABLE status_devolucao (
    id_status_devolucao int auto_increment primary key,
    status varchar(50)
);

