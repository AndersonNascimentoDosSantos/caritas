CREATE SCHEMA caritas_db;

CREATE  TABLE caritas_db.cadastro ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nome                 VARCHAR(50)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	dt_nascimento        DATE  NOT NULL     ,
	idade                INT  NOT NULL     ,
	sexo                 VARCHAR(10)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	est_civil            VARCHAR(15)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	telefone             VARCHAR(20)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	escolaridade         VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	nacionalidade        VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	naturalidade         VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	rg                   VARCHAR(20)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	cpf                  VARCHAR(20)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	profissao            VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	endereco             VARCHAR(50)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	bairro               VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	cep                  VARCHAR(10)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	email                VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	cad_unico            VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	religiao             VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	`status`             INT       ,
	CONSTRAINT id UNIQUE ( id ) 
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE  TABLE caritas_db.dependente ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	id_cadastro          INT  NOT NULL     ,
	nome_dep             VARCHAR(50)    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci   ,
	grau_parente         VARCHAR(30)    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci   ,
	dt_nascimento_dep    DATE       ,
	escolaridade_dep     VARCHAR(30)    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci   ,
	atividade_atual      VARCHAR(30)    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci   
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE INDEX cod_cadastro_fk ON caritas_db.dependente ( id_cadastro );

CREATE  TABLE caritas_db.economico ( 
	id                   INT  NOT NULL     PRIMARY KEY,
	situacao             VARCHAR(25)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	prog_gov             VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	valor                FLOAT  NOT NULL     ,
	servico              VARCHAR(20)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	grupo                VARCHAR(5)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	renda                VARCHAR(20)  NOT NULL  COLLATE utf8mb4_general_ci   
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE  TABLE caritas_db.moradia ( 
	id                   INT  NOT NULL     PRIMARY KEY,
	casa                 VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	construcao           VARCHAR(30)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	tempo                VARCHAR(10)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	agua                 VARCHAR(5)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	energia              VARCHAR(5)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	saneamento           VARCHAR(5)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	outra_casa           VARCHAR(15)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	frequencia           VARCHAR(15)  NOT NULL  COLLATE utf8mb4_general_ci   
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE  TABLE caritas_db.programa ( 
	id                   INT  NOT NULL     PRIMARY KEY,
	codigo               INT  NOT NULL     ,
	beneficio            VARCHAR(20)  NOT NULL  COLLATE utf8mb4_general_ci   
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE  TABLE caritas_db.usuario ( 
	id                   INT  NOT NULL   AUTO_INCREMENT  PRIMARY KEY,
	nome                 VARCHAR(50)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	login                VARCHAR(20)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	senha                VARCHAR(10)  NOT NULL  COLLATE utf8mb4_general_ci   ,
	tipo                 VARCHAR(10)  NOT NULL  COLLATE utf8mb4_general_ci   
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE caritas_db.dependente ADD CONSTRAINT cod_cadastro_fk FOREIGN KEY ( id_cadastro ) REFERENCES caritas_db.cadastro( id ) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE caritas_db.economico ADD CONSTRAINT fk_economico_1 FOREIGN KEY ( id ) REFERENCES caritas_db.cadastro( id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE caritas_db.moradia ADD CONSTRAINT fk_moradia_1 FOREIGN KEY ( id ) REFERENCES caritas_db.cadastro( id ) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE caritas_db.programa ADD CONSTRAINT fk_programa_1 FOREIGN KEY ( id ) REFERENCES caritas_db.cadastro( id ) ON DELETE NO ACTION ON UPDATE NO ACTION;
