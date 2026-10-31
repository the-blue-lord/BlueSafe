<?php

session_start();

include_once "../../components/menu-bar.php";
include_once "../../includes/functions.php";
include_once "../../private/database.php";

if(!isset($_SESSION["user_id"])) {
    header("Location: ./login.php");
    exit;
}

$debts = runQuery($db, "SELECT * FROM Debts WHERE user_id = :id", ["id" => $_SESSION["user_id"]]);

$totals = [[]]; $active = []; $closed = [];

$totals[0]["debt_id"] = 0;
$totals[0]["title"] = "Totali";
$totals[0]["description"] = "Ammontare complessivo di tutti i crediti registrati.";
$totals[0]["amount"] = 0;
$totals[0]["interest"] = 0;
$totals[0]["amount_paid"] = 0;

$totals[1]["debt_id"] = 0;
$totals[1]["title"] = "Parziali";
$totals[1]["description"] = "Ammontare complessivo di tutti i crediti ancora attivi.
        <span class=\"tooltip\">
            <span class=\"tooltip-icon\">?</span>
            <span class=\"tooltip-message\">Crediti con un rimanente positivo</span>
        </span>";
$totals[1]["amount"] = 0;
$totals[1]["interest"] = 0;
$totals[1]["amount_paid"] = 0;

foreach($debts as $debt) {
    $is_active = $debt["amount"] + $debt["interest"] - $debt["amount_paid"] != 0;

    $totals[0]["amount"] += $debt["amount"];
    $totals[0]["interest"] += $debt["interest"];
    $totals[0]["amount_paid"] += $debt["amount_paid"];

    if($is_active) {
        $totals[1]["amount"] += $debt["amount"];
        $totals[1]["interest"] += $debt["interest"];
        $totals[1]["amount_paid"] += $debt["amount_paid"];
        
        array_push($active, $debt);
        continue;
    }

    array_push($closed, $debt);
}

?>

<!DOCTYPE html>

<html>

    <head>
        <title>BlueSafe</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/text.css">
        <link rel="stylesheet" href="../assets/css/debts.css">
        <link rel="stylesheet" href="../assets/css/tooltip.css">
    </head>

    <body>
        <main>
            <h1>Benvenuto nella tua area personale</h1><br>
            <div id="debts-container">
                <?php
                    foreach($totals as $total) echo makeDebtDiv($total);
                ?>
            </div>
            <div id="debts-container">
                <?php foreach($active as $debt)  echo makeDebtDiv($debt); foreach($closed as $debt)  echo makeDebtDiv($debt);?>
            </div>
        </main>
    </body>

    <?php include "../../components/footer.php"; ?>

</html>