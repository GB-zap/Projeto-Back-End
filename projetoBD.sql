create database projeto;

use projeto;

create table dados
(id int auto_increment primary key,
nome varchar(80) not null,
sobrenome varchar(80) not null,
dataNas date not null,
nomeMat varchar (80) not null,
sexo varchar (15) not null,
cpf char (14) not null,
telCell varchar (15) not null,
telFixo varchar (15) null,
endereco varchar (80) not null,
login varchar (25) not null,
senha varchar (25) not null);

create table status 
(tipoUsuario varchar(8),
statusAtual varchar(8),
id int auto_increment primary key,
foreign key (id) references dados(id)
);

select * from status;
update status
set tipoUsuario = 'Master'
where id = 1;

SET FOREIGN_KEY_CHECKS=0;
DELETE FROM `dados` WHERE `id` = 5 LIMIT 1 

