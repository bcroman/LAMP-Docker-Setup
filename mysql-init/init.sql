CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL
);

INSERT INTO users (name, email)
VALUES
('Ben', 'ben@example.com'),
('John', 'john@example.com'),
('Sarah', 'sarah@example.com');