<?php

class DB
{
    static $db;
    /**
     * @return PDO
     */
    static function getConnection()
    {
        if (!isset(self::$db)) {
            self::$db = new PDO('mysql:host=localhost;dbname=db_bfQ3Q2j6D6mj5rKv', 'root', '');
        }
        return self::$db;
    }

    static function getStatement($sql)
    {
        return self::getConnection()->prepare($sql);
    }
}
?>
