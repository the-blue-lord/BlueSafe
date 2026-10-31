<?php

$err_code = $_GET["code"] ?? "404";

//var_dump($err_code);

include __DIR__ . "/error-" . $err_code . "/index.php";