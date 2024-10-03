CREATE TABLE Mensagens (
    id_mensagem INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (100) NOT NULL,    
    email VARCHAR (100) NOT NULL,
    telefone VARCHAR(50),
    mensagem TEXT NOT NULL,
    data_envio DATETIME
);
