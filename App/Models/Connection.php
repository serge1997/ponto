<?php
    namespace App\Models;

    class Connection
    {
        private static $connect;

        public static function getConnect()
        {
            if (!isset(self::$connect)):
                self::$connect = new \PDO('mysql:host=localhost; dbname=full; charset=utf8', 'root', '');
            endif;
            return self::$connect;
        }

    }