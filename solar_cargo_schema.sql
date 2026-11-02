CREATE DATABASE solar_cargo
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE solar_cargo;

CREATE TABLE containers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cargo_code VARCHAR(20) NOT NULL UNIQUE,
    cargo_name VARCHAR(100) NOT NULL,
    mass_kg DECIMAL(10,2) NOT NULL,
    status VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);