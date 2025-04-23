<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "marketplace";
    $conn = new mysqli($host, $user, $pass, $db);
    //check onection    

    $dsn = "mysql:host=$host;dbname=$db;";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>