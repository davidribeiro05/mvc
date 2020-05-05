<?php

namespace Sts\Models;

class Conn
{
    private static $options = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        // \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
        \PDO::ATTR_CASE => \PDO::CASE_NATURAL
    ];

    private static $instance;
    private static $host = "127.0.0.1";
    private static $usuario = "developer";
    private static $senha = "d4v1d.3238";
    private static $banco = "world";

    public static function getConn()
    {
        try {
            if (!isset(self::$instance)) :
                self::$instance = new \PDO('mysql:host=' . self::$host . ';dbname=' . self::$banco, self::$usuario, self::$senha, self::$options);
            endif;
            return self::$instance;
        } catch (\Exception $ex) {
            echo $ex->getMessage();
            die();
        }
    }

}