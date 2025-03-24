CREATE DATABASE homework8;

USE homework8;

-- Question 5
CREATE TABLE notes (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(80) NOT NULL,
    description VARCHAR(255) NOT NULL   
);
INSERT INTO notes (title, description) VALUES ('Note 1', ' This is the first note added to the table');
INSERT INTO notes (title, description) VALUES ('Note 2', 'How many notes should I add to the table?');
INSERT INTO notes (title, description) VALUES ('Note 3', 'Three descriptions seem like enough');

--Question 6
UPDATE notes 
SET title = 'Note 4', description = 'Description 4'
WHERE id = 1;

UPDATE notes 
SET title = 'New Title',
    description = 'How many notes should I add to the table?'
WHERE id = 2;

DELETE FROM notes 
WHERE id = 3;

--Question 7
SELECT * FROM notes 
ORDER BY title DESC;

SELECT * FROM notes 
LIMIT 1 OFFSET 1;

SELECT * FROM notes 
WHERE description LIKE '%a%' 
   OR description LIKE '%e%' 
   OR description LIKE '%i%' 
   OR description LIKE '%o%' 
   OR description LIKE '%u%'
   OR description LIKE '%A%' 
   OR description LIKE '%E%' 
   OR description LIKE '%I%' 
   OR description LIKE '%O%' 
   OR description LIKE '%U%';
