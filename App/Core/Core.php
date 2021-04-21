<?php

namespace App\Core;
use App\Controller\HomeController;

class Core {

    public function start($url) {
        $controller = ucfirst($url['pagina'].'Controller');
        $method = 'index';

        if (class_exists($controller)) {
            $controller = 'ErroController';
        }

        call_user_func_array(array(new HomeController, $method), array());

        echo $controller;
    }

}