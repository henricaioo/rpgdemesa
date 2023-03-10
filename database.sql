CREATE DATABASE rp;
USE rp;

CREATE TABLE usuario (
    id_user int PRIMARY KEY AUTO_INCREMENT, 
    user varchar(15) not null unique,
    senha text not null,
    perfil int not null
);

CREATE TABLE rpg (
    id_rpg int PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(25) not null unique,
    premissa text,
    criador varchar(15) not null
);

CREATE TABLE anotacaoRpg (
    id_anotacao int PRIMARY KEY AUTO_INCREMENT, 
    titulo varchar(15) not null,
    anotacao text,
    publica int not null,
    rpg varchar(25) not null
);

CREATE TABLE personagem (
    id_personagem int PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(50) not null unique,
    profissao text,
    idade int not null,
    sexo text not null,
    backstory text not null,
    aparencia text not null,
    conceito text not null,
    qualidades text,
    defeitos text,
    user varchar(15) not null,
    rpg varchar(25) not null
);

CREATE TABLE anotacaoPlayer (
    id_anotacaoplayer int PRIMARY KEY AUTO_INCREMENT, 
    titulo varchar(15) not null,
    anotacao text,
    user varchar(15) not null,
    rpg varchar(25) not null
);

CREATE TABLE inventario (
    id_inventario int PRIMARY KEY AUTO_INCREMENT, 
    personagem varchar(50) not null,
    quant int not null,
    nome varchar(40) not null,
    descricao text
);


CREATE TABLE atributo (
    id_atributoplayer int PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(20) not null,
    valor int not null,
    player varchar(50) not null
);

CREATE TABLE status (
    id_statusplayer int PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(20) not null,
    valor int not null,
    player varchar(50) not null
);