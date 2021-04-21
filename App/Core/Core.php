<?php

namespace App\Core;

class Core {

    public function start($url) {
        $pagina = ucfirst($url['pagina'].'Controller');
        echo $pagina;
    }

}