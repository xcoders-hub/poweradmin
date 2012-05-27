<?php

function __autoload($className) {
    $fileName = str_replace('\\', '/', $className) . '.php';
    require_once $fileName;
}