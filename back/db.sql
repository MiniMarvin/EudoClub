create database eudora;

create table revendedoras(
   id INT NOT NULL AUTO_INCREMENT,
   nome VARCHAR(200) CHARACTER SET utf8, /*Nome dela*/
   categoria VARCHAR(200) CHARACTER SET utf8, /*Se é ou não revendedora*/
   cidade VARCHAR(200) CHARACTER SET utf8, /*De onde ela é*/
   pontos INT, /*A pontuação que ela tem*/
   causas VARCHAR(10000) CHARACTER SET utf8, /*O que ela já fez*/
   PRIMARY KEY ( id )
);

create table revendedora(
   id INT NOT NULL AUTO_INCREMENT,
   nome VARCHAR(200) CHARACTER SET utf8, /*Nome dela*/
   categoria VARCHAR(200) CHARACTER SET utf8, /*Se é ou não revendedora*/
   cidade VARCHAR(200) CHARACTER SET utf8, /*De onde ela é*/
   pontos INT, /*A pontuação que ela tem*/
   bruto_ant INT,
   bruto_best INT,
   bruto_total INT,
   bruto INT,
   lucro_ant INT,
   lucro_best INT,
   lucro_total INT,
   lucro INT,
   gastos INT,
   clients INT,
   l1 INT,
   l2 INT,
   l3 INT,
   causas VARCHAR(10000) CHARACTER SET utf8, /*O que ela já fez*/
   PRIMARY KEY ( id )
);

INSERT INTO revendedoras (nome, categoria, pontos, causas)
VALUES ("Eunice", "begin", 190, "Plantação de árvores da Eudora");

INSERT INTO revendedoras (nome, categoria, pontos, causas, cidade)
VALUES ("Sheila", "begin", 240, "Plantação de árvores da Eudora", "Recife");

INSERT INTO revendedoras (nome, categoria, pontos, causas, cidade)
VALUES ("Bruna", "grower", 2400, "Plantação de árvores da Eudora", "Recife");

INSERT INTO revendedoras (nome, categoria, pontos, causas, cidade)
VALUES ("Eunuco", "expert", 20400, "Plantação de árvores da Eudora", "Recife");

/* Create New user in new table */
INSERT INTO revendedoras (nome, categoria, cidade, pontos, causas, bruto_ant, bruto_best, bruto_total, bruto, bruto_ant, bruto_best, bruto_total, bruto)
VALUES ("Eunice", "", 190, "Plantação de árvores da Eudora");

UPDATE revendedoras SET pontos=600 WHERE nome='sheila';
UPDATE revendedoras SET pontos=3600 WHERE nome='bruna';

/*TODO: modificar o banco de dados para ter mais dados sobre as açẽs realizadas pelas revendedoras*/

/* Create New user in new table */
INSERT INTO revendedora (nome,
 categoria,
 cidade,
 pontos,
 bruto_ant,
 bruto_best,
 bruto_total,
 bruto,
 lucro_ant,
 lucro_best,
 lucro_total,
 lucro,
 gastos,
 clients,
 l1,
 l2,
 l3,
 causas)
VALUES ("Eunice",
 "grower",
 "Recife",
 1900,

 	1900, 
	3200,
	 62300,
	 2800,

	 1800,
	 2900,
	 62300,
	 2200,

	 13000,
	 16,
	 
	 3,
	 5,
	 8,
	 
	 "Plantação de árvores da Eudora");