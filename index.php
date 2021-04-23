<?php
require_once 'vendor/autoload.php';
require_once 'App/View/includes/header.php'; ?>

    <main class="container">

        {{area_dinamica}}

    </main>

<?php

$pais = new \App\Model\Entities\Pais('', 'Brasil', 'BRA', '51');

var_dump($pais);

print_r('/n/n');

$paisDAO = new \App\Model\Dao\PaisDAO();
$paisDAO->create($pais);

print_r($paisDAO->read() + "/n/n");

require_once 'App/View/includes/footer.php'; ?>