<?php
include_once "../../components/menu-bar.php";
include_once "../../includes/functions.php";
include_once "../../private/database.php";

session_start();

if(!isset($_SESSION["user_id"])) {
    header("Location: ./login.php");
    exit;
}

$debts = runQuery($db, "SELECT * FROM Debts WHERE user_id = :id", ["id" => $_SESSION["user_id"]]);

?>

<!DOCTYPE html>

<html>

    <head>
        <title>BlueSafe</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/text.css">
        <link rel="stylesheet" href="../assets/css/debts.css">
    </head>

    <body>
        <main>
            <h1>Benvenuto nella tua area personale</h1><br>
            <div id="debts-container">
                <?php foreach($debts as $debt) echo makeDebtDiv($debt);?>
            </div>
        </main>
    </body>

</html>