CREATE DATABASE Bankly_V2

use Bankly_V2

create table Client (
    id int primary key auto_increment,
    nom varchar (50),
    email varchar (50) unique,
    CIN varchar (10) unique
);

create table Compte (
    id int primary key auto_increment,
    numero_commpte int,
    solde decimal (10,2) default 0,
    client_id int ,
    constraint fk_client_compte foreign key (client_id) references Client(id)on delete cascade
)ENGINE=InnoDB;

create table Transactions (
    id int primary key auto_increment,
    typeT varchar(10),
    constraint fk_check_type check (typeT in ('depot' , 'retrait')),
    montant decimal (10,2) default 0,
    dateT date,
    compte_id int,
    constraint fk_trans_compte foreign key (compte_id) references Compte(id) on delete cascade 
)ENGINE=InnoDB;

create table user (
    id int primary key auto_increment,
    userName varchar(50),
    passwrd varchar(50)
);