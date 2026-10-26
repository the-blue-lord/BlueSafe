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
                $username = key_exists("username", $_POST) ? $_POST["username"] : null;
                $password = key_exists("password", $_POST) ? $_POST["password"] : null;
                $hashed = hash("sha256", $password);

                $error_message = "Password errata";
            ?>
            <form id="login" action="index.php" method="POST">

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