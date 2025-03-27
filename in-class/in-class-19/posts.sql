CREATE DATABASE in_class_19;
USE in_class_19;

CREATE TABLE posts (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL
);

INSERT INTO posts (title, content) VALUES 
('Test Post', 'Test Content');