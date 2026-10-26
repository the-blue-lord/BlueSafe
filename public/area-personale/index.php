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
                $username = key_exists("username", $_POST) ? $_POST["username"] : "niente";
                $password = key_exists("password", $_POST) ? $_POST["password"] : "niente";
                $hashed = hash("sha256", $password);

                echo 'Utente: ' . $username . '<br>Password: ' . $password . '<br>Hash: ' . $hashed;
            ?>
        </main>
    </body>

</html>