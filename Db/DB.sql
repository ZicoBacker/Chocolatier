CREATE DATABASE Chocolatier;
USE Chocolatier;
CREATE TABLE Inschrijving(
Id INT NOT NULL AUTO_INCREMENT,
bsn INT NOT NULL,
email varchar(88) NOT NULL,
firstname varchar(88) NOT NULL,
lastname varchar(88) NOT NULL,
birthdate date NOT NULL,
phone varchar(16) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE Contact(
Id INT NOT NULL AUTO_INCREMENT,
Email VARCHAR(88) NOT NULL,
Beschrijving VARCHAR(128) NOT NULL,
PRIMARY KEY (Id)
);

CREATE TABLE `Admin`(
Id INT NOT NULL AUTO_INCREMENT,
username VARCHAR(128) NOT NULL,
pass VARCHAR(60) NOT NULL,
PRIMARY KEY(Id)
);

select * from inschrijving;
delete from Inschrijving where Id > 0;

INSERT INTO Admin(username,pass) VALUES("Admin","$2y$10$O3Vyv..70DOJCrlgj9D/TOq1stA9ungbOCmBU/zbIKcYe4.X0aED.");