-- Crear base de datos
CREATE DATABASE IF NOT EXISTS taller;

-- Crear usuario y permitir conexión remota
CREATE USER IF NOT EXISTS 'talleruser'@'%' IDENTIFIED BY 'clave123';
GRANT ALL PRIVILEGES ON taller.* TO 'talleruser'@'%';
FLUSH PRIVILEGES;

-- Crear tabla para guardar logins
USE taller;
CREATE TABLE IF NOT EXISTS logins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
