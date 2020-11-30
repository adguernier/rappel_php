<?php

require_once('autoload.php');


$user = new User();
$user->setEmail($_POST['email']);
$user->setNom($_POST['nom']);
$user->insert();

die('Insertion OK');