<?php
class Database
{
    private static $connection;
    private static $table;

    public static function getConnection()
    {
        if (!self::$connection) {
            try {
                $host = getenv('DB_HOST');
                $dbname = getenv('DB_NAME');
                $username = getenv('DB_USER');
                $pwd = getenv('DB_PWD');
                $port = getenv('DB_PORT');

                $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

                self::$connection = new PDO($dsn, $username, $pwd);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
        }

        return self::$connection;
    }

    public static function setTable($table)
    {
        self::$table = $table;
    }

    public static function getTable()
    {
        if (self::$table) {
            return self::$table;
        } else {
            return "";
        }
    }
    private function __construct() {}
    private function __clone() {}
}

