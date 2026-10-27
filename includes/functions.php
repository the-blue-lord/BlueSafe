<?php

function calcRelativePath($root, $folder) {
    $root = str_replace("\\", "/", $root);
    $folder = str_replace("\\", "/", $folder);

    $pos = strpos($folder, $root);

    if ($pos !== 0) return;

    $diff = substr($folder, strlen($root));

    $e = explode("/", trim($diff, "/"));

    if (count($e) === 1 && $e[0] === "") {
        return ".";
    }

    $r = array_fill(0, count($e), "..");

    return implode("/", $r);
}

function checkUser(?string $username, ?string $password, array | false $database_user): int {
    if(!$username || !$password) return 0;
    if(!$database_user) return 1;
    if($database_user["password_hash"] != hash("sha256", $password)) return 2;
    
    return 3;
}

function makeDebtDiv($debt) {
    ob_start();
    
    include __DIR__ . "/../components/debt-div.php";

    return ob_get_clean();
}