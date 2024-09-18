<?php

namespace Model;

abstract class Connect {
    const HOST = "localhost";
    const DB = "cinema";
    const USER = "root";
    const PASS = "";

    // Fonction permettant de se connecter, et renvoie d'un message d'erreur si erreur
    public static function seConnecter(){
        try {
            return new \PDO(
                "mysql:host=". self::HOST.";dbname=".self::DB.";charset=utf8", self::USER, self::PASS);
            
        } catch(\PDOException $ex){
            return $ex->getMessage();
        }
    }
}