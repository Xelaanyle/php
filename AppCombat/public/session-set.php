<?php

require __DIR__ . '/../vendor/autoload.php';

session_start();

dump($_SESSION);

$_SESSION['name'] = 'Alexandre';

dump($_SESSION);