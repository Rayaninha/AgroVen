CREATE DATABASE IF NOT EXISTS agroven;

USE agroven;

-- --------------------------------------------------------
--
-- Estrutura da tabela `VENDEDORES`
--
CREATE TABLE AGR_VENDEDORES (
  VEN_ID INT(11) NOT NULL AUTO_INCREMENT,
  VEN_NOME VARCHAR(100) NOT NULL,
  VEN_EMAIL VARCHAR(45) NOT NULL,
  VEN_SENHA VARCHAR(45) NOT NULL,
  VEN_END_RUA VARCHAR(100) NOT NULL,
  VEN_END_NUMERO VARCHAR(10) NOT NULL,
  VEN_END_CIDADE VARCHAR(45) NOT NULL,
  VEN_END_CEP VARCHAR(8) NOT NULL,
  CONSTRAINT VEN_PK PRIMARY KEY (VEN_ID)
);

-- --------------------------------------------------------
--
-- Estrutura da tabela `PRODUTO`
--
CREATE TABLE AGR_PRODUTO (
  PRO_ID INT(11) NOT NULL AUTO_INCREMENT,
  PRO_VEN_ID INT(11) NOT NULL,
  PRO_NOME VARCHAR(220) NOT NULL,
  PRO_DESCRICAO VARCHAR(220) NOT NULL,
  PRO_PRECO VARCHAR(220) NOT NULL,
  PRO_IMAGEM VARCHAR(220) NOT NULL,
  CONSTRAINT PRO_PK PRIMARY KEY (PRO_ID)
);

ALTER TABLE
  AGR_PRODUTO
ADD
  CONSTRAINT PRO_VEN_FK FOREIGN KEY (PRO_VEN_ID) REFERENCES AGR_VENDEDORES (VEN_ID);

-- --------------------------------------------------------
--
-- Estrutura da tabela `CLIENTES`
--
CREATE TABLE AGR_CLIENTES (
  CLI_ID INT(11) NOT NULL AUTO_INCREMENT,
  CLI_NOME VARCHAR(100) NOT NULL,
  CLI_EMAIL VARCHAR(45) NOT NULL,
  CLI_SENHA VARCHAR(45) NOT NULL,
  CLI_END_RUA VARCHAR(100) NOT NULL,
  CLI_END_NUMERO VARCHAR(10) NOT NULL,
  CLI_END_CIDADE VARCHAR(45) NOT NULL,
  CLI_END_CEP VARCHAR(8) NOT NULL,
  CONSTRAINT CLI_PK PRIMARY KEY (CLI_ID)
);

-- --------------------------------------------------------
--
-- Estrutura da tabela `COMPRA`
--
CREATE TABLE AGR_COMPRA (
  COM_ID INT(11) NOT NULL AUTO_INCREMENT,
  COM_CLI_ID INT(11),
  COM_VEN_ID INT(11),
  COM_FRE_ID INT(11),
  COM_PRECO INT,
  CONSTRAINT COM_PK PRIMARY KEY (COM_ID)
);

CREATE TABLE AGR_COMPRA_PRODUTO (
  CPP_ID INT(11) NOT NULL AUTO_INCREMENT,
  CPP_COM_ID INT(11) NOT NULL,
  CPP_PRO_ID INT(11) NOT NULL,
  CPP_QTD_PRO INT NOT NULL,
  CPP_PRECO_PRO_QTD INT NOT NULL,
  CONSTRAINT CPP_PK PRIMARY KEY(CPP_ID)
);

ALTER TABLE
  AGR_COMPRA_PRODUTO
ADD
  CONSTRAINT CPP_COM_FK FOREIGN KEY (CPP_COM_ID) REFERENCES AGR_COMPRA (COM_ID);

ALTER TABLE
  AGR_COMPRA_PRODUTO
ADD
  CONSTRAINT CPP_PRO_FK FOREIGN KEY (CPP_PRO_ID) REFERENCES AGR_PRODUTO (PRO_ID);

ALTER TABLE
  AGR_COMPRA
ADD
  CONSTRAINT COM_CLI_FK FOREIGN KEY (COM_CLI_ID) REFERENCES AGR_CLIENTES (CLI_ID);

ALTER TABLE
  AGR_COMPRA
ADD
  CONSTRAINT COM_VEN_FK FOREIGN KEY (COM_VEN_ID) REFERENCES AGR_VENDEDORES (VEN_ID);

-- --------------------------------------------------------
--
-- Estrutura da tabela `LISTA DE DESEJOS`
--
CREATE TABLE AGR_LISTA_DE_DESEJOS (
  LIS_ID INT(11) NOT NULL AUTO_INCREMENT,
  LIS_PRO_ID INT(11) NOT NULL,
  CONSTRAINT LIS_PK PRIMARY KEY (LIS_ID)
);

ALTER TABLE
  AGR_LISTA_DE_DESEJOS
ADD
  CONSTRAINT LIS_PRO_FK FOREIGN KEY (LIS_PRO_ID) REFERENCES AGR_PRODUTO(PRO_ID);

-- --------------------------------------------------------
-- 
/* -------------CHAT----------------*/
/*  Estrutura da tabela `AGR_CHAT`   */
CREATE TABLE AGR_CHAT (
  ID int(80) NOT NULL,
  NOME varchar(40) NOT NULL,
  MSG text NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

/*  indices  da tabela `AGR_CHAT`   */
ALTER TABLE
  AGR_CHAT
ADD
  PRIMARY KEY (ID);

-- AUTO_INCREMENT de tabela `AGR_CHAT`
ALTER TABLE
  AGR_CHAT
MODIFY
  ID int(80) NOT NULL AUTO_INCREMENT;

COMMIT;
