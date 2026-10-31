<?php

session_start();

$run = "";

if(!isset($_SESSION["user_id"])) {
    echo '<script>window.close();</script>';
    exit;
}

include_once "../../includes/functions.php";
include_once "../../private/database.php";

if(!isset($_GET["id"])) {
    echo '<script>window.close();</script>';
    exit;
}

$user_id = $_SESSION["user_id"];
$debt_id = (int) $_GET["id"];

$debt = runQuerySingle($db, "SELECT * FROM Debts WHERE debt_id = :d AND user_id = :u", ["d" => $debt_id, "u" => $user_id]);

if(!isset($debt["proof"])) {
    echo '<script>window.close();</script>';
    exit;
}

header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=\"prova-accredito-" . $debt_id . ".pdf\"");

echo $debt["proof"];

session_write_close();

exit;

?>