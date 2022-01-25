<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <style>
    h1{
        text-align:center;
        margin-top:2em;
        margin-bottom: 1em;
    }

    form{
        text-align:center;
    }

    body {
        background-color: #99CCFF;
    }

    button {
        display: block;
        /* 縦並び  */
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

    button:hover {
        box-shadow: none;
        /* カーソル時の影消去 */
        opacity: 1;
        /* カーソル時透明度 */
    }

    .border{
        background-color: #FFFF;
        border:solid 10px blue;
        border-radius: 6em;
        margin: 2em 10em ;
    }

    </style>
</head>

<body>
    <div class="border">
    <h1 class="register">初めての方はこちら</h1>
        <form action="register.php" method="post" class="form_log">
            <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
            <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
            <input type="password" name="check_password" class="textbox pass" placeholder="パスワードの確認"><br>

            <button type="submit" class="log_button">新規登録する</button>
            <p style="text-align:center;margin-top: 1.5em;">※パスワードは半角英数字をそれぞれ１文字以上含んだ、８文字以上で設定してください。</p>
        </form>
    </div>
    <div class="border">
    <h1 class="login">ログインはこちら</h1>
        <form action="login.php" method="post" class="form_log">
            <input type="email" name="email" class="textbox un" placeholder="メールアドレス"><br>
            <input type="password" name="password" class="textbox pass" placeholder="パスワード"><br>
            <button type="submit" class="log_button">ログインする</button>
        </form>
    </div>
    </body>

</html>