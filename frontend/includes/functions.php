<?php

function calcRelativePath($root, $folder) {
    $root = str_replace("\\", "/", $root);
    $folder = str_replace("\\", "/", $folder);
    
    $pos = strpos($folder, $root);

    if($pos != 0) return;

    $diff = substr($folder, strlen($root));

    $e = explode("/", str_replace("\\", "/", $diff));

    $r = array_fill(0, count($e), "..");

    $res = implode("/", $r);

    return $res;
}

?>