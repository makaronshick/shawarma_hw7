<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use App\Shawarma;
use App\OdessaShawarma;
use App\BeefShawarma;
use App\LambShawarma;
use App\ShawarmaCalculator;

$o = new OdessaShawarma();
$b = new BeefShawarma();
$l = new LambShawarma();

$calc = new ShawarmaCalculator();

$calc->add($o);
$calc->add($b);
$calc->add($l);

var_dump($calc->ingredients());

echo $calc->price();
