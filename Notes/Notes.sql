CREATE DATABASE NOTES; 

CREATE TABLE IF NOT EXISTS  Notes (
id INT, AUTO_INCREMENT, PRIMARY KEY,
date TIMESTAMP,
titel VARCHAR (20),
note TEXT
);
