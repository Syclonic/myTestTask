<?php

class DatabaseConnection
{
    public static function connectToDb($dbConfig)
    {
        try {
            return new PDO(
                $dbConfig['dbType']. ':host='. $dbConfig['dbHost']. ';dbname='. $dbConfig['dbName'],
                $dbConfig['dbUser'],
                $dbConfig['dbPassword']
            );

        } catch (PDOException $e) {
            echo 'Ошибка: '. $e->getMessage();
        }
    }
}

?>