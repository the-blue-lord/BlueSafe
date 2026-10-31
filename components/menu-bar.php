<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$loggedin = 0;

$loggedin = isset($_SESSION["user_id"]);


include_once __DIR__ . "/../includes/functions.php";
$rel = calcRelativePath(realpath(__DIR__."/../public/"), $_SERVER['SCRIPT_FILENAME']);

?>

<link rel="icon" type="image/x-icon" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/assets/images/favicon.png">
<link rel="stylesheet" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/assets/css/menu-bar.css">
<script src="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/assets/scripts/menu-bar.js"></script>

<div id="menu-bar">

    <div id="site-logo" onclick="window.location.href=`../`">

        <img id="logo" src="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/assets/images/favicon.png">
        <div id="site-name">BlueSafe</div>

    </div>

    <div id="menu-items">

        <a class="menu-item" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/">Home</a>
        <a class="menu-item" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/area-personale/">Area Personale</a>
        <!--<a class="menu-item" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/vendi/">Vendi</a> -->
        <a class="menu-item" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/faq/">FAQ</a>
        <!--<a class="menu-item" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/github-repo/">Github Repo</a>-->

    </div>

    <div id="account-logo">
        <div id="user-logo" onclick="toggleUserVisibility()"><img src="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/assets/images/wheel.png"></div>
        <div id="account-options" onmouseenter="removeUserVisibility()">
            <a class="menu-item right-item" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/area-personale/login.php"><?= $loggedin ? "Cambia utente" : "Connettiti" ?></a>
            <a class="menu-item <?= $loggedin ? "" : "hidden" ?>" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/area-personale/logout.php">Disconnettiti</a>
        </div>
    </div>

</div>