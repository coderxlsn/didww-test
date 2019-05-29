<?php

require_once 'bootstrap.php';

$regionsDocument = \Didww\Item\City::all();
$cites = $regionsDocument->getData();
foreach ($cites as $city) {
   print_r($region->getAttributes()['name']);
}
