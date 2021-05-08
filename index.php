<?php
require_once 'vendor/autoload.php';
require_once 'App/View/includes/header.php'; ?>

    <main class="container">
        

    </main>

<?php

$paisDAO = new \App\Model\Dao\PaisDAO();

$arr = $paisDAO->read();


require_once 'App/View/includes/footer.php'; ?>