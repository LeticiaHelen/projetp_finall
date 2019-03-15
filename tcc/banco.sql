create table usuario(
nome varchar(50) NOT NULL,
dtnasc date NOT NULL,
email varchar(40) NOT NULL,
senha varchar(20) NOT NULL,
id int(8) NOT NULL AUTO_INCREMENT,
PRIMARY KEY (id)
);

create table cadastroBebe(
nome varchar(50) NOT NULL,
dtnasc date NOT NULL,
altura double(4,2),
peso double(3,2),
sexo char(1),
tipoSangue varchar(4)
);