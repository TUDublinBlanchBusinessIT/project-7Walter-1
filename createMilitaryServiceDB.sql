drop database if exists militaryservice;
create database militaryservice;
use militaryservice;
create table Soldier (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    age varchar(2),
    rank varchar(30),
    primary key(id)
);