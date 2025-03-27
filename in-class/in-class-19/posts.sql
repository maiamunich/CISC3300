CREATE DATABASE in_class_19;
USE in_class_19;

CREATE TABLE posts (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    author VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts (title, content, author) VALUES
('First Post', 'This is the content of the first post', 'John Doe'),
('Second Post', 'Another interesting post content', 'Jane Smith'),
('Third Post', 'Yet another fascinating post', 'John Doe'); 