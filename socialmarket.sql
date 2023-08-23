-- Create database
CREATE DATABASE SOCIALMARKET;

-- Use database
USE SOCIALMARKET;

-- Create users table
CREATE TABLE USERS (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NAME VARCHAR(50),
    EMAIL VARCHAR(100),
    PHONE VARCHAR(20),
    PASSWORD VARCHAR(255)
);

-- Create packages table
CREATE TABLE PACKAGES (
    ID INT PRIMARY KEY,
    NAME VARCHAR(50),
    DETAILS TEXT,
    PRICE INT
);

-- Insert sample packages
INSERT INTO PACKAGES VALUES (
    250,
    'Basic',
    'Details for basic package',
    250
),
(
    500,
    'Standard',
    'Details for standard package',
    500
),
(
    1000,
    'Premium',
    'Details for premium package',
    1000
);