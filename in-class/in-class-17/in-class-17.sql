-- Create the database
CREATE DATABASE cisc3300;

-- Use the database
USE cisc3300;

-- Create a table (example for a bookstore)
CREATE TABLE books (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    publication_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO books (title, author, price, stock, publication_date) VALUES
('The Great Adventure', 'John Smith', 19.99, 50, '2023-01-15'),
('Mystery of the Lake', 'Sarah Johnson', 24.99, 30, '2023-03-20'),
('Programming 101', 'Mike Wilson', 39.99, 25, '2023-05-10'),
('Digital Dreams', 'Emma Brown', 29.99, 40, '2023-07-01');

-- Query to view the data
SELECT * FROM books;