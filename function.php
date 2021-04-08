<?php

/**
 * function.phpは修正不要です。
 */

function check_user_article($param){
    session_start();
    if(empty($param)){
        header("Location: create_article.php");
        exit;
    }
}

function find_post_by_title($title) { 

    $pdo = db_connect();
    try {

        $sql = "SELECT * FROM article WHERE title = :title order by id DESC"; 

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':title', $title);

        $stmt->execute();
    } catch (PDOException $e) {

        echo 'Error: ' . $e->getMessage(); 

        die();
    }

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        return $row; 
    }
}

?>