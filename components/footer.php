<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$loggedin = 0;

$loggedin = isset($_SESSION["user_id"]);


include_once __DIR__ . "/../includes/functions.php";

$rel = calcRelativePath(realpath(__DIR__."/../public/"), dirname($_SERVER['SCRIPT_FILENAME']));

?>

<link rel="icon" type="image/x-icon" href="<?php echo $rel ?>/assets/images/favicon.png">
<link rel="stylesheet" href="<?php echo $rel ?>/assets/css/footer.css">

<div id="footer">

    <p>
        Creato e mantenuto da Mr. Blue (<a href="https://github.com/the-blue-lord" target="_blank">the-blue-lord</a>)
    </p>

    <div class="divider"></div>

    <p>
        Codice sorgente open source disponibile alla <a href="https://github.com/the-blue-lord/BlueSafe" target="_blank">repository del progetto</a>
    </p>

</div>