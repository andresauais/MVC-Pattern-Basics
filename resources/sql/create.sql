-- Create databse
CREATE DATABASE mvc;
-- Use this databse
USE mvc;
-- Creating employees and travel tables
CREATE TABLE employees (
    emp_id int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255) NOT NULL,
    Address varchar(255),
    City varchar(255),
    PRIMARY KEY (emp_id)
);
CREATE TABLE travel (
	travel_id int NOT NULL,
    emp_id int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255) NOT NULL,
    Address varchar(255),
    City varchar(255),
    PRIMARY KEY (travel_id),
    FOREIGN KEY (emp_id) REFERENCES employees(emp_id)
);