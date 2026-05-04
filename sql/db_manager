<?php

// Technical attributes to connect to the database db_site_vente_en_ligne
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_site_vente_en_ligne');
define('DB_USER', 'root');
define('DB_PASS', '');

// Returns a PDO connection for db_site_vente_en_ligne
function getDbConnection(): PDO
{
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    return new PDO($dsn, DB_USER, DB_PASS, $options);
}

// Checks if adding another livre with est_a_la_une = true is allowed (max 3)
function canAddEstALaUne(): bool
{
    $pdo = getDbConnection();
    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM livre WHERE est_a_la_une = 1");
    $stmt->execute();
    $result = $stmt->fetch();
    return $result['count'] < 3;
}

