create database takalo;
use takalo;

create table user(
    idUser int primary key auto_increment,
    nom varchar(20) not null,
    mail varchar(20) not null,
    mdp varchar(20) not null,
    isAdmin boolean default false
);

insert into user(nom,mail,mdp) values('user1','1@gmail.com','u1');
insert into user(nom,mail,mdp) values('user3','3@gmail.com','u3');

insert into user(nom,mail,mdp,isAdmin) values('user1','1@gmail.com','u1',true);

create table categorie(
    idCategorie int primary key auto_increment,
    nomCategorie varchar(255) not null
);
insert into categorie (nomCategorie) values ('vetement'),('chaussure');

create table objet(
    idObjet int primary key auto_increment,
    idUser int,
    idCategorie int,
    valeur DOUBLE(10,3),
    nomObjet varchar(255),
    FOREIGN key (idUser) references user(idUser),
    FOREIGN key (idCategorie) references categorie(idCategorie)
);

insert into objet(idUser,idCategorie,valeur,nomObjet) values (2,1,null,'teeshirt'),(2,2,null,'talon');
insert into objet(idUser,idCategorie,valeur,nomObjet) values (3,1,null,'pull');

create table DetailObjet(
    idObjet int primary key auto_increment,
    sary varchar(255),
    description text ,
    FOREIGN key (idObjet) references objet(idObjet)
);
insert into DetailObjet(idObjet,sary,description) values (1,'teeshirt.png','XXL'),(2,'talon.png','28');
insert into DetailObjet(idObjet,sary,description) values (3,'pul.png','XL');


create table echange(
    idEchange int primary key auto_increment,
    idUser1 int,
    idUser2 int,
    idO1 int,
    idO2 int,
    dateDemande datetime not null,
    dateAccepte datetime,
    FOREIGN key (idUser1) references user(idUser),
    FOREIGN key (idUser2) references user(idUser),
    FOREIGN key (idO1) references objet(idObjet),
    FOREIGN key (idO2) references objet(idObjet)
);
