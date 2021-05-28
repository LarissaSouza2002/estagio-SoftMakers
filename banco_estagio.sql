-- Bando para vaga de estagio
BEGIN;
CREATE SCHEMA banco_estagio;
USE banco_estagio;
--
CREATE TABLE cad_animal(
    id int(20) NOT NULL AUTO_INCREMENT,
    nome_animal varchar(100) NOT NULL,
    idade_animal varchar(20) NOT NULL,
    tipo_animal varchar(30) NOT NULL,
    raca_animal varchar(100) NOT NULL,
    dono_animal varchar(100) NOT NULL,
    telefone varchar(40) NOT NULL,
	PRIMARY KEY (id));

