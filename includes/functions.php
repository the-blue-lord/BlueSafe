<?php

function calcRelativePath($root, $folder) {
    $root = str_replace("\\", "/", $root);
    $folder = str_replace("\\", "/", $folder);

    $pos = strpos($folder, $root);

    if ($pos !== 0) return;

    $diff = substr($folder, strlen($root));

    $e = explode("/", trim($diff, "/"));

    if (count($e) === 1 && $e[0] === "") {
        return ".";
    }

    $r = array_fill(0, count($e), "..");

    return implode("/", $r);
}

?>