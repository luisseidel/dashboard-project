<?php

namespace App\Model;

class Conexao {

    public static $instance;

    public static function getConnection() {

        if (!isset(self::$instance)):
            $host = 'mysql:host=localhost;port=3307;dbname=phpoo;charset=utf8';
            $userName = 'root';
            $password = '';

            self::$instance = new \PDO($host, $userName, $password);
        endif;
        return self::$instance;

    }

}

?>