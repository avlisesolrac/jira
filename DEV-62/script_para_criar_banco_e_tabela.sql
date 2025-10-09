CREATE DATABASE `dev62`;

CREATE TABLE `dev62`.`usuarios` (`identificador` INT(10) NOT NULL AUTO_INCREMENT , `primeiro_nome` VARCHAR(255) NOT NULL , `sobrenome` VARCHAR(255) NOT NULL , `data_nascimento` DATE NOT NULL , `email` VARCHAR(255) NOT NULL , `senha` VARCHAR(255) NOT NULL , PRIMARY KEY (`identificador`)) ENGINE = InnoDB;
