drop database if exists militaryservice;
create database militaryservice;
use militaryservice;
create table Army (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    yearsinservice decimal(2),
    ranking varchar(30),
    gender varchar(30),
    discharged date,  
    primary key(id)
);