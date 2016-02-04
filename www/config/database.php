<?php
define('DB_DRIVER', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'volunteam');


class Database
{

    private static $db;

    public static function getInstance()
    {
        if (self::$db === NULL)
        {
            try
            {
                self::$db = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD, array(PDO::ATTR_PERSISTENT => true));
            }
            catch (PDOException $e)
            {
                echo 'Error!: ' . $e->getMessage();
                die();
            }
        }
        return self::$db;
    }

}
