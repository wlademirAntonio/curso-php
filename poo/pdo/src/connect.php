<?php

declare(strict_types=1);

$pdo = null;

try {

    $pdo = new PDO('mysql:host=localhost:3308;dbname=bd3-tcc', 'root', 'DetonadorDHack12');

} catch (Exception $e) {

    echo $e->getMessage();
    die();

}

return $pdo;

