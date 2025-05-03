CREATE DATABASE ebloodbank;

USE ebloodbank;

CREATE TABLE donor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    blood_group VARCHAR(5),
    medical_conditions TEXT,
    contact VARCHAR(15)

);

CREATE TABLE receiver (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    blood_group VARCHAR(5),
    medical_conditions TEXT,
    contact VARCHAR(15)
);

ALTER TABLE donor (
ADD aadhar VARCHAR(12),
ADD gmail VARCHAR(100),
ADD gender VARCHAR(10),
ADD dob DATE;
);

ALTER TABLE receiver(
ADD aadhar VARCHAR(12),
ADD gmail VARCHAR(100),
ADD gender VARCHAR(10),
ADD dob DATE;
);

