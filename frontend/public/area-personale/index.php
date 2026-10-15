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

        <?php include "../../components/menu-bar.php"; ?>
        <main>
            <h1>Benvenuto nella tua area personale</h1><br>

            <?php

            $time = date("H:i:s");

            $username = key_exists("username", $_POST) ? $_POST["username"] : null;
            $password = key_exists("password", $_POST) ? $_POST["password"] : null;
            $hashed = hash("sha256", $password);

            $error = "";

            $login_form =
            '<form id="login" action="index.php" method="POST">

                Username
                <input type="text" id="username" placeholder=" " required>

                Password
                <input type="password" id="passowrd" placeholder=" " required>

                <input type="submit" value="Accedi">

            </form>';

            $error_form =
            '<form id="login" action="index.php" method="POST">

                Username
                <input type="text" id="username" name="username" required>

                Password
                <input type="password" id="passowrd" name="password" required>
                <span class="little-error">Password errata alle ' . $time . '</span>

                <input type="submit" value="Accedi">

            </form>';
            
            if($_SERVER["REQUEST_METHOD"] == "GET") {
                echo $error_form;
            } else if ($_SERVER["REQUEST_METHOD"] == "POST") {

            }
            
            ?>
        </main>
    </body>

</html>