
<?php
if(isset($_POST['title'])){
    echo"タイトルはあります！";
    $_title = $_POST['title'];
    $pdo = new PDO(
        "mysql:dbname=myDB;host=ab6427231e43","root","secret",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`")
    );
    if ($pdo) {
        //繋がってるときはこんな表示したくないのでコメントアウト
        echo "データベースに繋がっています";
    } else {
        "データベースに繋がってないでござる";
    }
    echo $_POST['title'];
    // $_regist = $pdo->prepare("INSERT INTO test(title) VALUES (?)");
    // ぶち込みのルールを決めます(?)
    // データベースのそれぞれの引き出しに
    //上で定義した変数の値をぶち込みます
    //bindParamよくわかってないから後で調べます
    // $regist->bindParam("title", $_title);
    // $regist->execute(array($_title));
}

if ($regist) {
    echo "登録完了したぜYay!";
} else {
    echo "エラーですクソコード書くな！";
}

?>