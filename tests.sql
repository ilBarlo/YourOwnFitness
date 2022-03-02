SELECT a.nome, a.durata, ae.nome_esercizio, ae.serie, ae.ripetizioni, nome_attrezzo, at.peso, at.serie, at.ripetizioni
from (allenamento a inner join allenamenti_esercizi ae on a.nome = ae.nome_allenamento) INNER join (select nome_allenamento, id, nome_attrezzo, peso from attrezzo inner join allenamenti_attrezzi on id = id_attrezzo) on a.nome = nome_allenamento
where a.tipo = "corpo libero";

SELECT a.nome, a.durata, ae.nome_esercizio, ae.serie, ae.ripetizioni, at.nome, at.peso, at.serie, at.ripetizioni 
from (allenamento a inner join allenamenti_esercizi ae on a.nome = ae.nome_allenamento) 
INNER join (select nome_allenamento, id, nome, peso, serie, ripetizioni from attrezzo 
inner join allenamenti_attrezzi on id = id_attrezzo) as at on a.nome = at.nome_allenamento where a.tipo = 'cardio'

create view allenamenti_cardio 
as SELECT a.nome, a.durata, ae.nome_esercizio, ae.serie as serie_esercizio, ae.ripetizioni as 
ripetizioni_esercizio, at.nome as nome_attrezzo, at.peso, at.serie as serie_peso, at.ripetizioni as ripetizioni_peso 
from (allenamento a inner join allenamenti_esercizi ae on a.nome = ae.nome_allenamento) 
INNER join (select nome_allenamento, id, nome, peso, serie, ripetizioni from attrezzo inner join allenamenti_attrezzi 
on id = id_attrezzo) as at on a.nome = at.nome_allenamento where a.tipo = 'cardio'

create view esercizi as (SELECT a.nome, a.tipo, a.durata, ae.nome_esercizio as nome_esercizio_attrezzo, e.peso, ae.serie, ae.ripetizioni 
from allenamento a inner join allenamenti_esercizi ae on a.nome = ae.nome_allenamento inner join 
esercizio e on ae.nome_esercizio = e.nome) order by nome;

create view pesi as (SELECT a.nome, a.tipo, a.durata, attr.nome as nome_esercizio_attrezzo, attr.peso, alat.serie, alat.ripetizioni 
from allenamento a inner join allenamenti_attrezzi alat on a.nome = alat.nome_allenamento inner join 
attrezzo attr on alat.id_attrezzo = attr.id) order by nome;

SELECT a.nome, a.tipo, a.durata, attr.nome as nome_esercizio_attrezzo, attr.peso, alat.serie, alat.ripetizioni 
from allenamento a inner join allenamenti_attrezzi alat on a.nome = alat.nome_allenamento inner join 
attrezzo attr on alat.id_attrezzo = attr.id UNION
SELECT a.nome, a.tipo, a.durata, ae.nome_esercizio as nome_esercizio_attrezzo, e.peso, ae.serie, ae.ripetizioni 
from allenamento a inner join allenamenti_esercizi ae on a.nome = ae.nome_allenamento inner join 
esercizio e on ae.nome_esercizio = e.nome
''''''''''''''''''''''''''
SELECT * FROM `esercizi` UNION (SELECT a.nome, a.tipo, a.durata, attr.nome as nome_esercizio_attrezzo, attr.peso, 
alat.serie, alat.ripetizioni from allenamento a inner join allenamenti_attrezzi alat on a.nome = alat.nome_allenamento 
inner join attrezzo attr on alat.id_attrezzo = attr.id) order by nome

/*
The query was right. The problem was Phpmyadmin that give that error when you have a query with union and a derived table like this.
*/

insert into `allenamenti_attrezzi`values ('dimagrimento 1', 1, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('dimagrimento 1', 4, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('dimagrimento 1', 8, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('dimagrimento 1', 5, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('dimagrimento 1', 7, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('dimagrimento 1', 9, 3, 15, 2);

insert into `allenamenti_attrezzi`values ('dimagrimento 2', 1, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('dimagrimento 2', 7, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('dimagrimento 2', 20, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('dimagrimento 2', 10, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('dimagrimento 2', 17, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('dimagrimento 2', 2, 3, 15, 2);

insert into `allenamenti_attrezzi`values ('forma 1', 6, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('forma 1', 13, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('forma 1', 14, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('forma 1', 17, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('forma 1', 21, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('forma 1', 25, 3, 15, 2);

insert into `allenamenti_attrezzi`values ('forma 2', 6, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('forma 2', 13, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('forma 2', 14, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('forma 2', 17, 3, 10, 2);
insert into `allenamenti_attrezzi`values ('forma 2', 21, 3, 10, 2);
insert into `allenamenti_attrezzi`values ('forma 2', 25, 3, 10, 2);

insert into `allenamenti_attrezzi`values ('potenziamento 1', 5, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('potenziamento 1', 18, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('potenziamento 1', 22, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('potenziamento 1', 23, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('potenziamento 1', 3, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('potenziamento 1', 7, 3, 15, 2);

insert into `allenamenti_attrezzi`values ('scheda 6', 9, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 6', 14, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 6', 12, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 6', 23, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('scheda 6', 3, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('scheda 6', 7, 3, 15, 2);

insert into `allenamenti_attrezzi`values ('potenziamento 2', 5, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('potenziamento 2', 18, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('potenziamento 2', 22, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('potenziamento 2', 23, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('potenziamento 2', 3, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('potenziamento 2', 7, 3, 15, 2);

insert into `allenamenti_attrezzi`values ('scheda 1', 6, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('scheda 1', 13, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('scheda 1', 14, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('scheda 1', 17, 3, 10, 2);
insert into `allenamenti_attrezzi`values ('scheda 1', 21, 3, 10, 2);
insert into `allenamenti_attrezzi`values ('scheda 1', 25, 3, 10, 2);

insert into `allenamenti_attrezzi`values ('scheda 2', 9, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('scheda 2', 11, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('scheda 2', 15, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('scheda 2', 16, 3, 10, 2);
insert into `allenamenti_attrezzi`values ('scheda 2', 23, 3, 10, 2);
insert into `allenamenti_attrezzi`values ('scheda 2', 24, 3, 10, 2);

insert into `allenamenti_attrezzi`values ('scheda 5', 9, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('scheda 5', 11, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('scheda 5', 15, 3, 8, 1);
insert into `allenamenti_attrezzi`values ('scheda 5', 16, 3, 10, 2);
insert into `allenamenti_attrezzi`values ('scheda 5', 23, 3, 10, 2);
insert into `allenamenti_attrezzi`values ('scheda 5', 24, 3, 10, 2);

insert into `allenamenti_attrezzi`values ('scheda 3', 5, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 3', 18, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 3', 22, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 3', 23, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('scheda 3', 3, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('scheda 3', 7, 3, 15, 2);

insert into `allenamenti_attrezzi`values ('scheda 4', 9, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 4', 14, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 4', 12, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 4', 23, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('scheda 4', 3, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('scheda 4', 7, 3, 15, 2);

insert into `allenamenti_attrezzi`values ('scheda 7', 19, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 7', 4, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 7', 2, 3, 12, 1);
insert into `allenamenti_attrezzi`values ('scheda 7', 3, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('scheda 7', 13, 3, 15, 2);
insert into `allenamenti_attrezzi`values ('scheda 7', 17, 3, 15, 2);

insert into `allenamenti_esercizi`values ('scheda 8', 'Affondi', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 8', 'Aperture laterali', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 8', 'Bear crawl', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 8', 'Piegamenti', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 8', 'Trazioni presa dritt', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 8', 'Stretching braccia', 3, 15, 2);

insert into `allenamenti_esercizi`values ('scheda 9', 'Trazioni presa inver', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 9', 'Bear crawl', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 9', 'Affondi', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 9', 'Trazioni presa dritt', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 9', 'Push up', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 9', 'Stretching braccia', 3, 15, 2);

insert into `allenamenti_esercizi`values ('scheda 10', 'Aperture laterali', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 10', 'Piegamenti', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 10', 'Bear crawl', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 10', 'Trazioni presa inver', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 10', 'Stretching braccia', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 10', 'Piegamenti plus', 3, 15, 2);

insert into `allenamenti_esercizi`values ('legpocalypse', 'Skip alto', 3, 12, 1);
insert into `allenamenti_esercizi`values ('legpocalypse', 'Affondi', 3, 12, 1);
insert into `allenamenti_esercizi`values ('legpocalypse', 'Squat', 3, 12, 1);
insert into `allenamenti_esercizi`values ('legpocalypse', 'Piegamenti', 3, 15, 2);
insert into `allenamenti_esercizi`values ('legpocalypse', 'Squat bulgaro', 3, 15, 2);
insert into `allenamenti_esercizi`values ('legpocalypse', 'Aperture laterali', 3, 15, 2);

insert into `allenamenti_esercizi`values ('dimagrimento 1', 'Squat bulgaro', 3, 12, 1);
insert into `allenamenti_esercizi`values ('dimagrimento 1', 'Affondi', 3, 12, 1);
insert into `allenamenti_esercizi`values ('dimagrimento 1', 'Trazioni presa dritt', 3, 12, 1);
insert into `allenamenti_esercizi`values ('dimagrimento 1', 'Piegamenti', 3, 15, 2);
insert into `allenamenti_esercizi`values ('dimagrimento 1', 'Aperture laterali', 3, 15, 2);
insert into `allenamenti_esercizi`values ('dimagrimento 1', 'Stretching braccia', 3, 15, 2);

insert into `allenamenti_esercizi`values ('dimagrimento 2', 'Aperture laterali', 3, 12, 1);
insert into `allenamenti_esercizi`values ('dimagrimento 2', 'Trazioni presa inver', 3, 12, 1);
insert into `allenamenti_esercizi`values ('dimagrimento 2', 'Piegamenti', 3, 12, 1);
insert into `allenamenti_esercizi`values ('dimagrimento 2', 'Squat bulgaro', 3, 15, 2);
insert into `allenamenti_esercizi`values ('dimagrimento 2', 'Bear crawl', 3, 15, 2);
insert into `allenamenti_esercizi`values ('dimagrimento 2', 'Stretching braccia', 3, 15, 2);

insert into `allenamenti_esercizi`values ('forma 1', 'Estensioni mani', 3, 12, 1);
insert into `allenamenti_esercizi`values ('forma 1', 'Stretching braccia', 3, 12, 1);
insert into `allenamenti_esercizi`values ('forma 1', 'Trazioni presa inver', 3, 12, 1);
insert into `allenamenti_esercizi`values ('forma 1', 'Affondi', 3, 15, 2);
insert into `allenamenti_esercizi`values ('forma 1', 'Squat', 3, 15, 2);
insert into `allenamenti_esercizi`values ('forma 1', 'Push up', 3, 15, 2);

insert into `allenamenti_esercizi`values ('forma 2', 'Aperture laterali', 3, 8, 1);
insert into `allenamenti_esercizi`values ('forma 2', 'Squat bulgaro', 3, 8, 1);
insert into `allenamenti_esercizi`values ('forma 2', 'Trazioni presa dritt', 3, 8, 1);
insert into `allenamenti_esercizi`values ('forma 2', 'Bear crawl', 3, 10, 2);
insert into `allenamenti_esercizi`values ('forma 2', 'Trazioni presa inver', 3, 10, 2);
insert into `allenamenti_esercizi`values ('forma 2', 'Squat', 3, 10, 2);

insert into `allenamenti_esercizi`values ('potenziamento 1', 'Aperture laterali', 3, 12, 1);
insert into `allenamenti_esercizi`values ('potenziamento 1', 'Piegamenti plus', 3, 12, 1);
insert into `allenamenti_esercizi`values ('potenziamento 1', 'Squat bulgaro', 3, 12, 1);
insert into `allenamenti_esercizi`values ('potenziamento 1', 'Affondi', 3, 15, 2);
insert into `allenamenti_esercizi`values ('potenziamento 1', 'Stretching braccia', 3, 15, 2);
insert into `allenamenti_esercizi`values ('potenziamento 1', 'Squat bulgaro', 3, 15, 2);

insert into `allenamenti_esercizi`values ('scheda 6', 'Aperture laterali', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 6', 'Flessioni busto', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 6', 'Jumping jack', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 6', 'Bear crawl', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 6', 'Squat bulgaro', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 6', 'Stretching polpacci', 3, 15, 2);

insert into `allenamenti_esercizi`values ('potenziamento 2', 'Piegamenti plus', 3, 12, 1);
insert into `allenamenti_esercizi`values ('potenziamento 2', 'Affondi', 3, 12, 1);
insert into `allenamenti_esercizi`values ('potenziamento 2', 'Jumping jack', 3, 12, 1);
insert into `allenamenti_esercizi`values ('potenziamento 2', 'Squat bulgaro', 3, 15, 2);
insert into `allenamenti_esercizi`values ('potenziamento 2', 'Estensioni busto', 3, 15, 2);
insert into `allenamenti_esercizi`values ('potenziamento 2', 'Stretching braccia', 3, 15, 2);

insert into `allenamenti_esercizi`values ('scheda 1', 'Aperture laterali', 3, 8, 1);
insert into `allenamenti_esercizi`values ('scheda 1', 'Trazioni presa inver', 3, 8, 1);
insert into `allenamenti_esercizi`values ('scheda 1', 'Bear crawl', 3, 8, 1);
insert into `allenamenti_esercizi`values ('scheda 1', 'Push up', 3, 10, 2);
insert into `allenamenti_esercizi`values ('scheda 1', 'Jumping jack', 3, 10, 2);
insert into `allenamenti_esercizi`values ('scheda 1', 'Affondi', 3, 10, 2);

insert into `allenamenti_esercizi`values ('scheda 2', 'Squat bulgaro', 3, 8, 1);
insert into `allenamenti_esercizi`values ('scheda 2', 'Aperture laterali', 3, 8, 1);
insert into `allenamenti_esercizi`values ('scheda 2', 'Flessioni busto', 3, 8, 1);
insert into `allenamenti_esercizi`values ('scheda 2', 'Trazioni presa dritt', 3, 10, 2);
insert into `allenamenti_esercizi`values ('scheda 2', 'Estensioni busto', 3, 10, 2);
insert into `allenamenti_esercizi`values ('scheda 2', 'Trazioni presa inver', 3, 10, 2);

insert into `allenamenti_esercizi`values ('scheda 5', 'Estensioni busto', 3, 8, 1);
insert into `allenamenti_esercizi`values ('scheda 5', 'Squat bulgaro', 3, 8, 1);
insert into `allenamenti_esercizi`values ('scheda 5', 'Estensioni mani', 3, 8, 1);
insert into `allenamenti_esercizi`values ('scheda 5', 'Trazioni presa dritt', 3, 10, 2);
insert into `allenamenti_esercizi`values ('scheda 5', 'Affondi', 3, 10, 2);
insert into `allenamenti_esercizi`values ('scheda 5', 'Trazioni presa inver', 3, 10, 2);

insert into `allenamenti_esercizi`values ('scheda 3', 'Squat bulgaro', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 3', 'Estensioni busto', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 3', 'Trazioni presa dritt', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 3', 'Aperture laterali', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 3', 'Jumping jack', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 3', 'Stretching polpacci', 3, 15, 2);

insert into `allenamenti_esercizi`values ('scheda 4', 'Estensioni mani', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 4', 'Piegamenti', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 4', 'Trazioni presa dritt', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 4', 'Affondi', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 4', 'Stretching polpacci', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 4', 'Estensioni busto', 3, 15, 2);

insert into `allenamenti_esercizi`values ('scheda 7', 'Affondi', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 7', 'Flessioni busto', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 7', 'Squat bulgaro', 3, 12, 1);
insert into `allenamenti_esercizi`values ('scheda 7', 'Bear crawl', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 7', 'Stretching polpacci', 3, 15, 2);
insert into `allenamenti_esercizi`values ('scheda 7', 'Estensioni busto', 3, 15, 2);