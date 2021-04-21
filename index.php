<?php
require_once 'vendor/autoload.php';
require_once 'App/View/includes/header.php';

use App\Core\Core;
use App\Controller\HomeController;

$template = file_get_contents('App/View/pages/estrutura.php');

$core = new Core();
$core->start($_GET);

echo $template;

require_once 'App/View/includes/footer.php';