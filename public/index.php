<?php
require '../vendor/autoload.php';

use App\Wcs\Hello;

$test = Hello::talk();
echo "$test";
