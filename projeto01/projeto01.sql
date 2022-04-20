-- Drop banco de dados
-- drop database projeto01;

-- Criação do bano de dados
 create database projeto01;
 
 -- Selecionar banco de dados
 use projeto01;
 
 -- criaçção da tabela usuario
 create table usuario(
		id_usuario 			int 			not null auto_increment,
        nome_usuario     varchar(100)       not null,
        email_usuario     varchar(100)       not null,
        fone_usuario     varchar(30)       not null,
        primary key(id_usuario)
        );
        
        