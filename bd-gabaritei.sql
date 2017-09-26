CREATE DATABASE web_gabaritei;

CREATE TABLE Usuario (
    usu_id int (6) PRIMARY KEY AUTO_INCREMENT,
    usu_nome varchar (30) NOT NULL,
    usu_login varchar (30) NOT NULL UNIQUE,
    usu_senha varchar (30) NOT NULL UNIQUE,
    usu_sexo boolean,
    usu_email varchar (30) NOT NULL UNIQUE,
    usu_nascimento varchar (10),
    usu_idade int (2),
	usu_tipo int (1) NOT NULL,
	usu_perfil int (2) NOT NULL
);

CREATE TABLE Perfil_usuario (
	perf_ID int (6) PRIMARY KEY AUTO_INCREMENT,
	perf_tipo varchar (30) NOT NULL
);

CREATE TABLE Tipo_usuario (
	tipo_ID int (6) PRIMARY KEY AUTO_INCREMENT,
	tipo_usuario varchar (30) NOT NULL
);


create table Alunos (
    alu_id int (6) PRIMARY KEY AUTO_INCREMENT,
    alu_nome varchar (50) NOT NULL,
    alu_idade int (2),
    alu_nascimento varchar (10),
    alu_loguin varchar (15) NOT NULL UNIQUE,
    alu_senha varchar (15) NOT NULL,
    alu_escola_id int (3)NOT NULL,
    alu_bairro_id int (3) NOT NULL,
    alu_cidade_id int (3) NOT NULL,
    alu_estado_id int (3) NOT NULL, 
    alu_email varchar (30)NOT NULL,
    alu_telefone int (10)
);

insert into Alunos(
    alu_nome, alu_idade, alu_nascimento, alu_loguin, 
    alu_senha, alu_escola_id, alu_bairro_id, alu_cidade_id, alu_estado_id, alu_email, alu_telefone)
    values ('Lucas Domingos Leão Gomes', 20, '05/05/1997', 'lucasdlg', 
    '12456', 1, 1, 1, 1, 'ldgomes@latam.stefanini.com', '996381194'
    );

    

create table Bairro(
    bairro_id int (6) PRIMARY KEY AUTO_INCREMENT,
    bairro_nome varchar(30) NOT NULL UNIQUE,
    bairro_cidade_id int (6) NOT NULL,
    bairro_estado_id int (6) NOT NULL
);



insert into Bairro(
    bairro_id, bairro_nome, bairro_cidade_id, bairro_estado_id)
    values (idseq.nextval, 'Buquirinha2', 1, 10);


create table Cidade(
    cidade_id int CONSTRAINT cidade_cidade_pk PRIMARY KEY,
    cidade_nome varchar  (30) NOT NULL UNIQUE,
    cidade_estado_id int (6) NOT NULL
);

insert into Cidade(
    cidade_id, cidade_nome, cidade_estado_id)
    values (idseq.nextval, 'Sao Jose Dos Campos', 1)
);


create table Estado(
    estado_id int CONSTRAINT estado_estado_pk PRIMARY KEY,
    estado_nome varchar  (30) NOT NULL UNIQUE
);