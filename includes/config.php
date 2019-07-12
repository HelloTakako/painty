<?php
 define('APP_PATH',$_SERVER['DOCUMENT_ROOT'].'/news/');

function html ($data) {
    $sanitizedData = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $sanitizedData;
}

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
