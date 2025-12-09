<?php
require_once 'config.php';
class Database
{
    private static $conn;
    public static function connectPDO()
    {
        try {
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];
            $dsn = 'mysql:host=' . _HOST . '; dbname=' . _DBNAME;
            self::$conn = new PDO($dsn, _USER_DB, _PASSWORD_DB, $option);
            return self::$conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}