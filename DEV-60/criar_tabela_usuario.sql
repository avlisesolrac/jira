CREATE TABLE `dev60`.`usuario` (`id_usuario` INT(10) NOT NULL AUTO_INCREMENT , `primeiro_nome` VARCHAR(255) NOT NULL , `sobrenome` VARCHAR(255) NOT NULL , `nascimento` DATE NOT NULL , `sexo` VARCHAR(255) NOT NULL , `telefone` VARCHAR(255) NOT NULL , `cep` VARCHAR(8) NOT NULL , `rua` VARCHAR(255) NOT NULL , `numero_rua` VARCHAR(5) NOT NULL , `complemento_rua` VARCHAR(255) NOT NULL , PRIMARY KEY (`id_usuario`)) ENGINE = InnoDB;

--Adicionar o ultimo campo cidade, pq quando criei os 10 campos acima, havia esquecido que o primeiro campo seria a primary_key.
ALTER TABLE `usuario` ADD `cidade` VARCHAR(255) NOT NULL AFTER `complemento_rua`;


--Adicionar registro na tabela usuario
INSERT INTO `usuario` (`primeiro_nome`, `sobrenome`, `nascimento`, `sexo`, `telefone`, `cep`, `rua`, `numero_rua`, `complemento_rua`, `cidade`) VALUES ('DIGITAR_PRIMEIRO_NOME', 'DIGITAR_SOBRENOME', 'DIGITAR_DATA_NASCIMENTO', 'DIGITAR_SEXO', 'DIGITAR_TELEFONE', 'DIGITAR_CEP', 'DIGITAR_RUA', 'DIGITAR_NUMERO_RUA', 'DIGITAR_COMPLEMENTO_RUA', 'DIGITAR_CIDADE')