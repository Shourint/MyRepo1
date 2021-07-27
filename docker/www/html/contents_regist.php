<?php

// if(isset($_POST['title']) && isset($_POST['contents'])){
    $_title = $_POST['title'];
    $_contents = $_POST['contents'];
    $_date = new DateTime('now');

    $pdo = new PDO(
        "mysql:dbname=myDB;host=ab6427231e43","root","secret"
    );

    $stmt = $pdo->prepare("INSERT INTO
        -- T_CONTENTS(insert_date)
        T_CONTENTS(title, contents, insert_date, update_date)

        VALUES(
            :_title,
            :_contents,
            :_insert_date,
            :_update_date
        )");

    $stmt->bindParam( ':_title', $_title, PDO::PARAM_STR);
    $stmt->bindParam( ':_contents', $_contents, PDO::PARAM_STR);
    $stmt->bindParam( ':_insert_date', $_date->format('Y-m-d H:i:s'), PDO::PARAM_STR);
    $stmt->bindParam( ':_update_date', $_date->format('Y-m-d H:i:s'), PDO::PARAM_STR);


    $res = $stmt->execute();
// }
header( "Location: ./regist_complete.php" ) ;
// echo "登録完了！"


?>