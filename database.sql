CREATE DATABASE rp;
USE rp;

CREATE TABLE usuario (
    id_user int PRIMARY KEY AUTO_INCREMENT, 
    user varchar(15) not null,
    senha text not null,
    perfil int not null
);

CREATE TABLE rpg (
    id_rpg int PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(15) not null,
    premissa text,
    criador int not null,
    FOREIGN KEY (criador) REFERENCES usuario(id_user)
);

CREATE TABLE anotacaoRpg (
    id_anotacao int PRIMARY KEY AUTO_INCREMENT, 
    titulo varchar(15) not null,
    anotacao text,
    rpg int not null,
    FOREIGN KEY (rpg) REFERENCES rpg(id_rpg)
);

CREATE TABLE personagem (
    id_personagem int PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(15) not null,
    profissao text,
    idade int not null,
    sexo varchar(10) not null,
    backstory text not null,
    aparencia text not null,
    conceito text not null,
    qualidades text not null,
    defeitos text not null,
    user int not null,
    FOREIGN KEY (user) REFERENCES usuario(id_user)
);

CREATE TABLE anotacaoPlayer (
    id_anotacaoplayer int PRIMARY KEY AUTO_INCREMENT, 
    titulo varchar(15) not null,
    anotacao text,
    player int not null,
    FOREIGN KEY (player) REFERENCES personagem(id_personagem)
);

CREATE TABLE item (
    id_item int PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(40) not null,
    descricao text
);

CREATE TABLE inventario (
    id_inventario int PRIMARY KEY AUTO_INCREMENT, 
    personagem int not null,
    item int not null,
    FOREIGN KEY (personagem) REFERENCES personagem(id_personagem),
    FOREIGN KEY (item) REFERENCES item(id_item)
);

CREATE TABLE atributos (
    id_atributo int PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(10) not null,
    rpg int not null,
    FOREIGN KEY (rpg) REFERENCES rpg(id_rpg)
);

CREATE TABLE atributoPlayer (
    id_atributoplayer int PRIMARY KEY AUTO_INCREMENT, 
    valor varchar(10) not null,
    player int not null,
    atributo int not null,
    FOREIGN KEY (player) REFERENCES personagem(id_personagem),
    FOREIGN KEY (atributo) REFERENCES atributos(id_atributo)
);

CREATE TABLE statu (
    id_status int PRIMARY KEY AUTO_INCREMENT, 
    nome varchar(10) not null,
    rpg int not null,
    FOREIGN KEY (rpg) REFERENCES rpg(id_rpg)
);

CREATE TABLE statusPlayer (
    id_statusplayer int PRIMARY KEY AUTO_INCREMENT, 
    valor varchar(10) not null,
    player int not null,
    statu int not null,
    FOREIGN KEY (player) REFERENCES personagem(id_personagem),
    FOREIGN KEY (statu) REFERENCES statu(id_status)
);