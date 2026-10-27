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
    return '<div>
        <h2>' . $debt["title"] . '</h2>
        <h4>' . $debt["description"] . '</h4>
        <p>Prova d\'accredito: <a href="prova-accredito.php?id=' . $debt["debt_id"] . '" target="_blank" rel="noopener">File</a></p>
        <p>(N) Netto: ' . $debt["amount"] . '€</p>
        <p>(I) Interessi: ' . $debt["interest"] . '€</p>
        <p>(L) Lordo [N+I]: ' . $debt["amount"]+$debt["interest"] . '€</p>
        <p>(P) Pagato: ' . $debt["amount_paid"] . '€</p>
        <p>(R) Rimanente [L-P]: ' . $debt["amount"]+$debt["interest"]-$debt["amount_paid"] . '€</p>
        <br><br><br>
    </div>';
}