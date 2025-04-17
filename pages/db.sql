CREATE DATABASE projetmasson;
use projetmasson;

CREATE TABLE contacts(
    id int primary key auto_increment,
    nom varchar(200),
    prenom varchar(200),
    email varchar(200) unique,
    telephone int,
    message varchar(1000)
);