
<?php

    include __DIR__ . "/../includes/functions.php";

    $rel = calcRelativePath(realpath(__DIR__."/../public/"), dirname($_SERVER['SCRIPT_FILENAME']));

?>

<link rel="stylesheet" href="<?php echo $rel ?>/assets/css/menu-bar.css">

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

</div>