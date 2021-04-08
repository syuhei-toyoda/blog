<?php

/**
 * 正しい内容を記述しdb_connect.phpを修正してください。
 * 下の「TODO①〜②」に従って、必要な処理を追記/修正してください
 */


// ①defineを正常に動作できるように足りない情報を記述してください。

define('DB_DATABASE');

define('DB_USERNAME');

define('DB_PASSWORD');

define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);



function db_connect() { 
    try {

        // ②PDOインスタンスを作成してください。
        $pdo = PDO;

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        return $pdo;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage(); 
        die();
    }
}