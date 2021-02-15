CREATE DATABASE Trucorp;

USE Trucorp;

CREATE TABLE users
(
	ID INT PRIMARY KEY,
	Nama varchar(30) NOT NULL,
	Kantor varchar(30) CHECK(Kantor = 'Pusat' or Kantor = 'Cabang')
);

INSERT INTO users VALUES
('1', 'Ferdinand', 'pusat'),
('2', 'Leonardi', 'cabang'),
('3', 'Galauuas', 'pusat');


