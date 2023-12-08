drop database if exists militaryservice;
create database militaryservice;
use militaryservice;

create table officer (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    primary key(id)
);

create table army (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    yearsinservice decimal(2),
    ranking varchar(30),
    gender varchar(30),
    discharged date,
    officerid int,
    foreign key(officerid) references officer(id),
    primary key(id)
);

INSERT INTO officer(firstname,surname) values ("Dwight", "Eisenhower");
INSERT INTO officer(firstname,surname) values ("Micheal", "Collins");
INSERT INTO army(firstname,surname,yearsinservice,ranking,gender,discharged,officerid) values ('Joe','Smith','1','Male','Recruit','2012-03-01',1)
INSERT INTO army(firstname,surname,yearsinservice,ranking,gender,discharged,officerid) values ('James','Smith','4','Male','Sergeant','2019-05-11',1)
INSERT INTO army(firstname,surname,yearsinservice,ranking,gender,discharged,officerid) values ('Jack','Hanley','8','Male','Lieutenant','2017-08-01',1)
INSERT INTO army(firstname,surname,yearsinservice,ranking,gender,discharged,officerid) values ('Amy','Schumacher','9','Female','Lieutenant','2015-10-10',2)
INSERT INTO army(firstname,surname,yearsinservice,ranking,gender,discharged,officerid) values ('Arnold','Kent','2','Male','Recruit','2012-03-09',2)
INSERT INTO army(firstname,surname,yearsinservice,ranking,gender,discharged,officerid) values ('Steve','Flanagan','2','Male','Recruit','2016-01-11',2)