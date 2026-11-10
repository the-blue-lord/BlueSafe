<?php
include_once __DIR__ . "/../includes/functions.php";
$rel = calcRelativePath(realpath(__DIR__."/../public/"), $_SERVER['SCRIPT_FILENAME']);
?>

<link rel="stylesheet" href="<?=$_SERVER['SCRIPT_NAME']."/".$rel ?>/assets/css/footer.css">

<div id="footer">

    <p>
        Creato e mantenuto da Mr. Blue (<a href="https://github.com/the-blue-lord" target="_blank">the-blue-lord</a>)
    </p>

    <div class="divider"></div>

    <p>
        Open source code, available at the <a href="https://github.com/the-blue-lord/BlueSafe" target="_blank">github project repository</a>
    </p>

</div>