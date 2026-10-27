<?php declare(strict_types=1);

require_once __DIR__."/env.php";

$db_info = "mysql:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8mb4";


$db = new PDO(
    $db_info,
    $db_user,
    $db_password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]
);

function runQuerySingle(PDO $db, string $query, array $params = []) : array | false {
    $q = $db->prepare($query);
    $q->execute($params);
    $res = $q->fetch();

    return $res;
}

function runQuery(PDO $db, string $query, array $params = []) : array | false {
    $q = $db->prepare($query);
    $q->execute($params);
    $res = $q->fetchAll();

    return $res;
}