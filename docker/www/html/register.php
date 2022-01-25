<style>
    body {
        background-color: #99CCFF;
    }

    form{
        text-align:center;
    }

    button:hover {
        box-shadow: none;
        /* カーソル時の影消去 */
        opacity: 1;
        /* カーソル時透明度 */
    }
    button {
        text-align: center;
        /* 文字中央揃え */
        width: 200px;
        /* 横幅       */
        border-radius: 10px;
        /* 角丸       */
        font-size: 13pt;
        /* 文字サイズ */
        cursor: pointer;
        /* カーソル   */
        padding: 15px 14px;
        /* 余白       */
        background: #0059b3;
        /* 背景色     */
        color: #000000;
        /* 文字色     */
        line-height: 1em;
        /* 1行の高さ  */
        opacity: 0.9;
        /* 透明度     */
        transition: .3s;
        /* なめらか変化 */
        box-shadow: 3px 3px 7px #666666;
        /* 影の設定 */
        margin: 10px auto;
    }

</style>
<?php
try {
    $pdo = new PDO(
        "mysql:dbname=myDB;host=ab6427231e43","root","secret"
    );
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("create table if not exists userDeta(
      id int not null auto_increment primary key,
      email varchar(255),
      password varchar(255),
      created timestamp not null default current_timestamp
    )");
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
//メールアドレスのバリデーション
if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  echo '入力された値が不正です。';
  return false;
}
//正規表現でパスワードをバリデーション
if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $_POST['password'])) {
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
} else {
    ?>
    <script>
        window.alert('パスワードは半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください。');
        history.go(-1);
    </script>
    <?php
  return false;
}

if ($_POST['password'] == $_POST['check_password']){

//データベース内のメールアドレスを取得
$stmt = $pdo->prepare("select email from userDeta where email = ?");
$stmt->execute([$email]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
//データベース内のメールアドレスが存在しない場合、登録する。
if (!isset($row['email'])) {
  $stmt = $pdo->prepare("insert into userDeta(email, password) value(?, ?)");
  $stmt->execute([$email, $password]);
?>
<body>
  <main class="main_log">
    <p>登録完了</p>
  <h1 style="text-align:center;margin-top: 0em;margin-bottom: 1em;" class="h1_log">ログインしてください</h1>
  <form action="topmenu.php" method="post" class="form_log">
    <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
    <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
    <button type="submit" class="log_button">ログインする</button>
  </form>
  <p align="center">戻るボタンや更新ボタンを押さないでください</p>
</body>
<?php
}else {
?>
<body>
  <main class="main_log">
  <p style="text-align:center;margin-top: 0em;margin-bottom: 1em;">既に登録されたメールアドレスです</p>
  <h1 style="text-align:center;margin-top: 0em;margin-bottom: 1em;">もう一度入力をお願い致します</h1>
  <form action="register.php" method="post" class="form_log">
    <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
    <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
    <input type="password" name="check_password" class="textbox pass" placeholder="パスワードの確認"><br>
    <button type="submit" class="log_button">新規登録する</button>
    <p style="text-align:center;margin-top: 1.5em;">※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
  </form>
</main>
</body>
<?php
return false;
}
}
?>
<script>
    window.alert('同一のパスワードを入力してください。');
    history.go(-1);
</script>
<?php
  return false;
?>