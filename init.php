<?php

require_once 'vendor/autoload.php';

use sorciulus\PartitaIva\PartitaIva;

$class = new PartitaIva();
$isValid = $class->setPartitaIva(null)->isValid();
var_dump($isValid);