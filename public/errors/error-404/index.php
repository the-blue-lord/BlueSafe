<?php

include_once __DIR__ . "/../../../includes/functions.php";

?>

<!DOCTYPE html>

<html>

    <head>
        <title>BlueSafe</title>
        <link rel="icon" type="image/x-icon" href="/bluesafe/assets/images/favicon.png">
        <link rel="stylesheet" href="<?=$_SERVER['SCRIPT_NAME']?>/../../assets/css/main.css">
        <link rel="stylesheet" href="<?=$_SERVER['SCRIPT_NAME']?>/../../assets/css/text.css">
    </head>

    <body>

        <?php include __DIR__ . "/../../../components/menu-bar.php"; ?>
        <main>
            <h1>Errore 404 - Pagina non trovata</h1>
            Spiacenti, ma la pagina che cerchi non esiste o è stata rimossa. <br><br>
            Sei proprio sicuro di non aver sbagliato qualcosa o di non avere informazioni obsolete?
        </main>

        <?php include __DIR__ . "/../../../components/footer.php"; ?>
        
    </body>

</html>