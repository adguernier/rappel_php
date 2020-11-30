<?php

spl_autoload_register(function($className) {
    if (file_exists('entity/' . $className . '.php')) {
        require_once('entity/' . $className . '.php');
        return;
    }
    if (file_exists('core/' . $className . '.php')) {
        require_once('core/' . $className . '.php');
        return;
    }
});