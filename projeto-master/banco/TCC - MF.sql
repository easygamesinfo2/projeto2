-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE usuario (
cod_usuario int auto_increment PRIMARY KEY,
senha varchar(30),
email varchar(50),
nome varchar(50),
cod_tip int
);

CREATE TABLE noticia (
cod_noticia int auto_increment PRIMARY KEY,
data_noticia date,
descricao varchar(200),
titulo_da_noticia varchar(50)
);

CREATE TABLE jogo (
cod_jogo int auto_increment PRIMARY KEY,
nome varchar(30),
descricao varchar(200)
);

CREATE TABLE comentario (
cod_usuario int,
cod_jogo int,
cod_noticia int,
texto_comentario varchar(100),
data_comentario date,
cod_comentario int auto_increment PRIMARY KEY,
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario),
FOREIGN KEY(cod_jogo) REFERENCES jogo (cod_jogo),
FOREIGN KEY(cod_noticia) REFERENCES noticia (cod_noticia)
);

CREATE TABLE avaliacao (
cod_jogo int,
cod_usuario int,
data_avaliacao date,
velocidade int,
atualizacoes int,
diversao int,
audio int,
cod_avaliacao int auto_increment PRIMARY KEY,
jogabilidade int,
social int,
grafico int,
FOREIGN KEY(cod_jogo) REFERENCES jogo (cod_jogo),
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario)
);

CREATE TABLE cadastrar (
cod_usuario int,
cod_jogo int,
cod_noticia int,
FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario),
FOREIGN KEY(cod_jogo) REFERENCES jogo (cod_jogo),
FOREIGN KEY(cod_noticia) REFERENCES noticia (cod_noticia)
);

CREATE TABLE tip_user (
cod_tip int auto_increment PRIMARY KEY,
desc_tip_user varchar(100)
);

ALTER TABLE usuario ADD FOREIGN KEY(cod_tip) REFERENCES tip_user (cod_tip);
