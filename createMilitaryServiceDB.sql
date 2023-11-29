drop database if exists militaryservice;
create database militaryservice;
use militaryservice;
create table Soldier (
    firstname varchar(30),
    surname varchar(30),
    age number(2)
    Rank varchar(30)
    primary key(id)
);