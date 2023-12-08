DROP DATABASE if EXISTS militaryservice;
CREATE DATABASE militaryservice;
USE militaryservice;
drop table if exists registeredUser;
create table registeredUser(
    regUserID int auto_increment,
    userName varchar(30),
    pwd varchar(30),
    primary key(regUserID)
);

INSERT INTO registeredUser(userName, pwd) values('Walter', 'semperFidelis')