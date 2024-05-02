CREATE TABLE `myhometeacher`.`usuarios` (
    `usuarioid` INT NOT NULL AUTO_INCREMENT COMMENT 'Chave primária de usuário' , 
    `nome` VARCHAR(25) NULL , 
    `senha` VARCHAR(240) NULL , 
    `datacadastro` DATE NULL  , 
    `dataalteracao` DATE NULL , 
    `dataexclusao` DATE NULL , 
    PRIMARY KEY (`usuarioid`)) ENGINE = MyISAM;


ALTER TABLE `usuarios` ADD `email` VARCHAR(50) NULL AFTER `nome`;


/* Criação de usuário */


usuario: admin
senha: MyH0m3T34ch3R    


INSERT INTO `usuarios` (`nome`, `senha`, `email`, `datacadastro`) VALUES ('admin', SHA1('MyH0m3T34ch3R'), 'reina.marcelo@gmail.com', now());
