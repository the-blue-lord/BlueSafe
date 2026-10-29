<?php

session_start();

include_once "../../components/menu-bar.php";
include_once "../../private/database.php";
include_once "../../includes/functions.php";

$username = key_exists("username", $_POST) ? $_POST["username"] : null;
$password = key_exists("password", $_POST) ? $_POST["password"] : null;

$error_message = "";

$db_user = runQuerySingle($db, "SELECT * FROM Users WHERE username = :u", ["u" => $username]);
$res = checkUser($username, $password, $db_user);

if($res == 1) $error_message = "Utente non trovato";
else if($res == 2) $error_message = "Password errata";
else if($res == 3) {
    session_regenerate_id(true);
    $_SESSION["user_id"] = $db_user["user_id"];

    header("Location: ../area-personale", true, 303);
    exit;
}

?>

<!DOCTYPE html>

<html>

    <head>
        <title>BlueSafe</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/text.css">
        <link rel="stylesheet" href="../assets/css/input.css">
    </head>

    <body>
        <main>
            <h1>Accedi alla tua area personale</h1><br>

            <form id="login" action="login.php" method="POST">

                Username
                <input type="text" name="username" placeholder=" " required>

                Password
                <input type="password" name="password" placeholder=" " required>

                <input type="submit" value="Accedi">
            
                <?php 
                    $time = date("H:i:s");
                    if($error_message) echo '<span class="little-error">' . $error_message . ' alle ' . $time . '</span>';
                ?>
            </form>

        </main>
    </body>

</html>