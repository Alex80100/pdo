<?php 

require_once __DIR__ .'/../config/connect.php';

function connect(){
    try {
            $pdo = new PDO(DSN,USER,PASSWORD);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
            return $pdo;
    } catch (\Throwable $th) {
            echo $th->getMessage();
            die;
    }

}