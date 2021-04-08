<?php

/**
 * ここではcreate_article.phpで追加された値を読み込み、articleテーブルのレコードを表示する処理を記述してください。
 * 
 * こちらのPHP領域内では、create_table.phpから値が受け渡されているかチェックし、
 * 渡された値を元に追加した最新の値を画面上部に表示させます。

 * 下のHTML領域では最新の値を表示する処理と、
 * articleテーブルに追加した値を全て表示する処理を記述してください。
 * 
 * 下の「TODO①〜④」に従って、必要な処理を追記/修正してください
 */

// ①必要なphpファイルを読み込む処理を記述してください。



$title=$_GET["title"];

check_user_article($title);    // $titleに値があるかを確認

$row=find_post_by_title($title);

// ②articleテーブルからtitleとcontentの値を受け取る処理を記述してください


$pdo=db_connect();
try{
    // ③articleテーブルから表示したいレコードを受け取る処理を記述してください。

}catch(PDOException $e){
    echo 'Error' .$e->getMessage();
    die();
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div>
        <p>あなたが追加した記事</p>
        <br />
        <p>title : <?php echo $row_title; ?></p>
        <p>content : <?php echo $row_content; ?></p>
        <a href="create_article.php" style="float: right;">記事を追加する</a>
        <br />
    </div>
     <div>
        <!-- ④全てのレコードを表示させる処理を記述しましょう。id=2からなどは失敗です。 -->
            <?php while ($i) { 

                echo '<hr>';
                echo $row['id']; 
                echo '<br />';
                echo $row['title'];
                echo '<br />';
                echo $row['content'];

             } ?> 
        </div>
    
</body>
</html>