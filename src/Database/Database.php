<?php

namespace App\Database;

use PDO;

class Database
{
    private static $connect;

    static function connexion(): void
    {
        try {
            self::getPdo();
        } catch (\PDOException $e) {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        }
    }

    static function query($sql, array $cond = null): array
    {
        $stmt = self::$connect->prepare($sql);

        if ($cond) {
            foreach ($cond as $v) {
                $stmt->bindParam($v[0], $v[1], $v[2]);
            }
        }

        $stmt->execute();

        return $stmt->fetchAll();
    }


    static function getPdo(): PDO
    {
        if (!self::$connect instanceof PDO) {
            self::$connect = new PDO(
                'mysql:host=localhost;dbname=blog;charset=utf8mb4',
                'root',
                ''
            );
            self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            self::$connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        return self::$connect;
    }
}


