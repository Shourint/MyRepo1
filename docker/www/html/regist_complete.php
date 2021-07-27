<!DOCTYPE html>
<html lang="ja">

<head>
    <title>登録完了</title>
    <style>
    h1 {
        text-align: center;
        font-size: 24px;
    }

    body {
        background-color: #99CCFF;
    }

    .button-area {
        display: block;
        /* ブロック化  */
        margin: 0 auto;
        /* 中央揃え */
    }

    .menu-button {
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
        /* 余白 */
    }

    .menu-button a {
        color: #fff;
        /* 文字色     */
        text-decoration: none;
        /* 下線なし   */
    }

    .menu-button:hover {
        box-shadow: none;
        /* カーソル時の影消去 */
        opacity: 1;
        /* カーソル時透明度 */
    }
    </style>
</head>

<body>
    <h1>記事の登録が完了しました。</h1>
    <div class="index-warpper">
        <div class="button-area">
            <div class="menu-button">
                <a href="./regist.php">新しい記事を作成</a>
            </div>
            <div class="menu-button">
                <a href="./view.php">記事閲覧</a>
            </div>
            <div class="menu-button">
                <a href="./index.php">HOME</a>
            </div>
        </div>
    </div>
</body>

</html>