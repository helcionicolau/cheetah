<?php

namespace App;

// use PDO;
// use PDOException;

//Objecto do banco de dados
class Connection {

    //Esse método será responsável por criar a conexão com o banco de dados
    public static function getDb() {

        try {

            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );

            return $conn;

        } catch (\PDOException $error) {
            throw $error;
        }
    }
}


?>