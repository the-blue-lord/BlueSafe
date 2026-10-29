<?php

session_start();

include_once "../../components/menu-bar.php";

$_SESSION = [];

if(ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();

    setcookie(
        session_name(),
        '',
        time()-4200,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]

    );
}

session_destroy();

header("Location: ../", true, 303);

exit;