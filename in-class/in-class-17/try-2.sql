-- Create the database
CREATE DATABASE cisc3300;

-- Use the database
USE cisc3300;

-- Create a table for albums
CREATE TABLE albums (
    id INT PRIMARY KEY AUTO_INCREMENT,
    album_name VARCHAR(255) NOT NULL,
    artist VARCHAR(100) NOT NULL,
    genre VARCHAR(50),
    price DECIMAL(6,2) NOT NULL,
    release_year INT,
    in_stock BOOLEAN DEFAULT true
);

-- Insert sample data
INSERT INTO albums (album_name, artist, genre, price, release_year) VALUES
('Back in Black', 'AC/DC', 'Rock', 19.99, 1980),
('INSANO', 'Kid Cudi', 'Hip-Hop', 24.99, 2024),
('21', 'Adele', 'Pop', 21.99, 2011),
('SUNBURN', 'Domanic Fike', 'Hip-Hop', 29.99, 2023),
('The Dark Side of the Moon', 'Pink Floyd', 'Rock', 25.99, 1973);

-- Try different SELECT queries:
SELECT * FROM albums;  -- Gets everything

SELECT album_name, artist FROM albums;  -- Gets just names and artists

SELECT * FROM albums WHERE genre = 'Rock';  -- Gets only rock albums

SELECT * FROM albums WHERE price < 25.00;  -- Gets albums under $25

SELECT * FROM albums ORDER BY release_year;  -- Orders by year