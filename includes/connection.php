
<?php

class Database
{
    private static $connection = null;
    public static function connect()
    {
        try {
            self::$connection = new PDO('mysql:host=localhost;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname=mtimg', 'root', 'root');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return self::$connection;
    }
    public static function disconnect()
    {
        self::$connection = null;
    }
}