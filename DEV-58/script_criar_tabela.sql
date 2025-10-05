IDEIAS PRO BANCO DO CARD DEV-58:

tabela: vendas

- identificador
- nome_produto
- preco_produto
- tamanho_produto
- cor produto

CREATE TABLE `dev58`.`vendas` (`identificador` INT(10) NOT NULL AUTO_INCREMENT , `nome_produto` VARCHAR(255) NOT NULL , `preco_produto` VARCHAR(10) NOT NULL , `tamanho_produto` VARCHAR(2) NOT NULL , `cor_produto` VARCHAR(10) NOT NULL , PRIMARY KEY (`identificador`)) ENGINE = InnoDB;