<?php

$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_DATABASE');
$user = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
        $user,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Sucesso na conexão!";
    
} catch (PDOException $e) {
    die('Erro na conexão com o banco: ' . $e->getMessage());
}