use mysql;
create user 'root'@'localhost' identified by "Fjeclot22@";
create database examen;
use examen;
grant all privileges on examen.* to 'admin'@'localhost';