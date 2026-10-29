<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$loggedin = 0;

$loggedin = isset($_SESSION["user_id"]);


include __DIR__ . "/../includes/functions.php";

$rel = calcRelativePath(realpath(__DIR__."/../public/"), dirname($_SERVER['SCRIPT_FILENAME']));

?>

<link rel="icon" type="image/x-icon" href="<?php echo $rel ?>/assets/images/favicon.png">
<link rel="stylesheet" href="<?php echo $rel ?>/assets/css/menu-bar.css">
<script src="<?php echo $rel ?>/assets/scripts/menu-bar.js"></script>

<div id="menu-bar">

    <div id="site-logo" onclick="window.location.href=`../`">

        <img id="logo" src="<?php echo $rel ?>/assets/images/favicon.png">
        <div id="site-name">BlueSafe</div>

    </div>

    <div id="menu-items">

        <a class="menu-item" href="<?php echo $rel ?>/">Home</a>
        <a class="menu-item" href="<?php echo $rel ?>/area-personale/">Area Personale</a>
        <a class="menu-item" href="<?php echo $rel ?>/vendi/">Vendi</a>
        <a class="menu-item" href="<?php echo $rel ?>/faq/">FAQ</a>

    </div>

    <div id="account-logo">
        <div id="user-logo" onclick="toggleUserVisibility()"><img src="<?php echo $rel ?>/assets/images/wheel.png"></div>
        <div id="account-options" onmouseenter="removeUserVisibility()">
            <a class="menu-item right-item" href="<?php echo $rel ?>/area-personale/login.php"><?= $loggedin ? "Cambia utente" : "Connettiti" ?></a>
            <a class="menu-item <?= $loggedin ? "" : "hidden" ?>" href="<?php echo $rel ?>/area-personale/logout.php">Disconnettiti</a>
        </div>
    </div>

</div>