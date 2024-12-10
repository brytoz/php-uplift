CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100)
);


-- Retrieve All Users:
SELECT * FROM users;


-- Retrieve a Specific User by ID:
SELECT * FROM users WHERE id = 1;

-- Insert a New User:
INSERT INTO users (username, email) VALUES ('JohnDoe', 'johndoe@example.com');


-- Delete a Specific User:
DELETE FROM users WHERE id = 1;


-- Update a user's email address:
UPDATE users SET email = 'newemail@example.com' WHERE id = 1;
