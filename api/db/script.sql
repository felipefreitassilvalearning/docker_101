CREATE DATABASE IF NOT EXISTS docker_101_db;
USE docker_101_db;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO products VALUES
    (0, 'Docker Course', 27.90, 'Aprenda Docker do zero', NULL),
    (0, 'AWS Course', 27.90, 'Aprenda AWS do zero', NULL);
