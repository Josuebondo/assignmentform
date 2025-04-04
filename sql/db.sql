CREATE DATABASE assignment_db;

USE assignment_db;

CREATE TABLE assignments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course VARCHAR(255),
    subject VARCHAR(255),
    title VARCHAR(255),
    description TEXT,
    submission_date DATE,
    name VARCHAR(255),
    roll_no VARCHAR(50),
    file_path VARCHAR(255)
);
