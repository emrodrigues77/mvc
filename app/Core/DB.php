<?php

namespace App\Core;

class DB {

    private static $connection;

    public static function getConnection() {

        try {
            if (self::$connection === null) {


                self::$connection = new \PDO(
                    "mysql:host=localhost;dbname=coach_j",
                    "root",
                    //"P16_l12_a01!",
                    "playmobil",
                    array(
                        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
                    )
                );
                self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }
        } catch (\Exception $ex) {
            throw new \Exception("Failed to connect to database - " . $ex->getMessage() . $ex->getLine());
        }

        return self::$connection;
    }
}