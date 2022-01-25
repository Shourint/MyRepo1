<?php

session_start();
//メールアドレスのバリデーション
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    ?>
    <script>
        window.alert('入力された値が不正です。');
        history.go(-1);
    </script>
    <?php
  return false;
}

//DB内でPOSTされたメールアドレスを検索
try {
    $pdo = new PDO(
        "mysql:dbname=myDB;host=ab6427231e43","root","secret"
    );
    $stmt = $pdo->prepare('select * from userDeta where email = ?');
    $stmt->execute([$_POST['email']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    }
//emailの存在確認
if (!isset($row['email'])) {
    ?>
    <script>
        window.alert('入力されたメールアドレスは登録されておりません。');
        history.go(-1);
    </script>
    <?php
  return false;
}
//パスワード確認後sessionにメールアドレスを渡す
if (password_verify($_POST['password'], $row['password'])) {
  session_regenerate_id(true); //session_idを新しく生成し、置き換える
  $_SESSION['EMAIL'] = $row['email'];
  header('Location: ./topmenu.php');
} else {
?>
<script>
    window.alert('メールアドレス又はパスワードが間違っています。');
    history.go(-1);
</script>
<?php
  return false;
}
