test

create table produit(
    idProduit VARCHAR(10) primary key,
    nomProduit VARCHAR(50),
    prix NUMBER(10,2)
); 
create table recette(
    idProduit VARCHAR(10),
    idIngredient VARCHAR(10),
    quantite NUMBER(10,8),
    foreign key(idProduit) references produit(idProduit),
    foreign key(idIngredient) references produit(idProduit)
);

insert into produit values('P01','Fanta',null);
insert into produit values('P02','limonade PM',null);
insert into produit values('P03','limonade GM',null);
insert into produit values('P04','THB PM',null);
insert into produit values('P05','THB GM',null);
insert into produit values('C01','eaugazeux',null);
insert into produit values('C02','eau',1000);
insert into produit values('C03','gaz',500);
insert into produit values('C04','colorant',150);
insert into produit values('C05','sucre',100);
insert into produit values('C06','aromes',250);
insert into produit values('C07','conservateur',600);
insert into produit values('C08','orge',120);
insert into produit values('C09','alcool',2000);
insert into produit values('C10','Etiquete',null);
insert into produit values('C11','Bouteille',500);
insert into produit values('C12','papier',50);
insert into produit values('C13','impression',400);
insert into produit values('C14','mais',250);


insert into recette values('P02','C01',null);
insert into recette values('C01','C02',15);
insert into recette values('C01','C03',50);
insert into recette values('P02','C04',60);
insert into recette values('P02','C05',10);
insert into recette values('P02','C06',40);
insert into recette values('P02','C07',50);
insert into recette values('P02','C10',null);
insert into recette values('C10','C12',0.5);
insert into recette values('C10','C13',1);
insert into recette values('P02','C11',1);
insert into recette values('P03','P02',3);

insert into recette values('P04','C01',null);
insert into recette values('P04','C08',40);
insert into recette values('P04','C09',1.2);
insert into recette values('P04','C07',50);
insert into recette values('P04','C14',5);
insert into recette values('P04','C10',null);
insert into recette values('P04','C11',1);
insert into recette values('P05','P04',3);


SELECT 
    p.*,
    (SELECT SUM(r.quantite * c.prix)
        FROM recette r
        INNER JOIN produit c
        ON r.idIngredient = c.idProduit
        WHERE r.idProduit = p.idProduit
        START WITH r.idProduit = p.idProduit
        CONNECT BY PRIOR r.idIngredient = r.idProduit
        where 
    ) AS prix
FROM produit p;
