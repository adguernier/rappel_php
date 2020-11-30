<?php

spl_autoload_register(function($className) {
    $class = str_replace('App\\', '', $className);
    $class = str_replace('\\', '/', $class);
    require 'src/' . $class . '.php';
});

use App\Entity\User;
new User();