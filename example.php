<?php

include('src/KawalCorona.php');

$corona = new Pravodev\KawalCorona\KawalCorona;
$data_provinsi = $corona->getProvinces();

var_dump($data_provinsi);