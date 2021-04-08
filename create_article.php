<!-- PHP領域 -->
<?php

/**
 * ここではHTML領域で入力された値を、articleテーブルに追加する処理をして行きます。。
 * 
 * こちらのPHP領域内では、主に値のチェックなどの処理を記述し、
 * 下のHTML領域では記述不要です。
 * 
 * 下の「TODO①〜④」に従って、必要な処理を追記/修正してください
 */


// ①必要なphpファイルを読み込む処理を記述してください。


session_start();

if(!empty($_POST)){
     // titleとcontentの入力チェック 
    
    if(empty($_POST["title"]) || empty($_POST["content"])){
        if(empty($_POST["title"]) && empty($_POST["content"])){
            echo "タイトルとコンテンツが未入力です。";
        }elseif(empty($_POST["title"])){
            echo "タイトルが未入力です。";
        }elseif(empty($_POST["content"])){
            echo "コンテンツが未入力です。";
        }
    }

    // ②HTMLに入力された値に不適切な内容を無視する処理を記述してください。
    if(!empty($_POST["title"]) && !empty($_POST["content"])){


        $pdo_article=db_connect();
        try{

            // ③articleテーブルにデータを追加する処理を記述してください。
            $sql_article="SELECT * FROM article";
            $stmt_article=$pdo_article->prepare($sql_article);
            header("Location: result.php?title=".$title); 
            exit;


        }catch(PDOException $e){
            echo 'Error' .$e->getMessage();
            die();

        }
    }
}
?>
<!-- HTML領域: ここは修正不要 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="" method="POST" accept-charset="utf-8">
    
        <h1>記事追加</h1><br />
        <br />
        タイトル：<br />
        <input type="text" name="title" style ="width: 200px;height: 50px;" ><br />
        コンテンツ：<br />
        <input type="text" name="content" style="width: 200px;height: 100px;"><br />
        <input type="submit" value="追加" style="font-size: 1.0em;"><br />

    </form>
</body>
</html>