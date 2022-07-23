<?php

$data = new DateTime();

$interval = new DateInterval('PT5M');
$data->add($interval);

var_dump($data);