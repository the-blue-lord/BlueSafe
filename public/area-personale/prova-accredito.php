<?php

session_start();

if(!isset($_SESSION["user_id"])) {
    header("Location: ./login.php");
    exit;
}

include_once "../../includes/functions.php";
include_once "../../private/database.php";

if(!isset($_GET["id"])) {
    header("Location: ../area-personale");
    exit;
}

$user_id = $_SESSION["user_id"];
$debt_id = (int) $_GET["id"];

$debt = runQuerySingle($db, "SELECT * FROM Debts WHERE debt_id = :d AND user_id = :u", ["d" => $debt_id, "u" => $user_id]);

if(!$debt) {
    header("Location: ../area-personale");
    exit;
}

header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=\"prova-accredito-" . $debt_id . ".pdf\"");

echo $debt["proof"];

session_write_close();

exit;

?>