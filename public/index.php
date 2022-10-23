<?php

require __DIR__ . '../../vendor/autoload.php';

use App\Hello;

$hello = new App\Hello();

echo $hello->talk();
