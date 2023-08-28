-- Use database
USE SOCIALMARKET;

-- Create users table
CREATE TABLE USERS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    PHONENUMBER VARCHAR(60) NOT NULL,
    NAMES VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(200) NOT NULL,
    PASSWORD VARCHAR(500) NOT NULL
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

CREATE TABLE CONTENT (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    CONTENT_TEXT TEXT NOT NULL
);