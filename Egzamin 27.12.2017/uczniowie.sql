CREATE DATABASE Szkola character set utf8;

USE Szkola;

CREATE TABLE uczniowie
(
    id_ucz INT UNSIGNED NOT NULL PRIMARY KEY,
    Nazwisko char(40) NOT NULL,
    Imie char(40) NOT NULL,
    Pesel INT(11) NOT NULL,
    Adres_ul char(60) NOT NULL,
    Adres_nr char(10) NOT NULL,
    Miasto char(40) NOT NULL
)