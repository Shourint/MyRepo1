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
        echo "データベースに繋がってないでござる";
    }
    // echo $_POST['title'];
    $sql = "INSERT INTO
        yasai_item
        (name, price)
        VALUES
        ('ナス', 70)";
$sth = $pdo -> query($sql);
}

if ($regist) {
    echo "登録完了したぜYay!";
} else {
    echo "エラーですクソコード書くな！";
}

?>