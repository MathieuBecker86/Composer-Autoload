<?php

require_once '../vendor/autoload.php';

use App\Wcs\hello;

$hello = new hello();

echo $hello->getTalk();