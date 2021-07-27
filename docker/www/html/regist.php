<!DOCTYPE html>
<html lang="ja">

<head>
    <title>記事 - 入力画面</title>
    <style>
    h1 {
        text-align: center;
        margin: 40px auto;
        font-size: 24px;
    }

    body {
        background-color: #99CCFF;
    }

    .input {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        vertical-align: top;
    }

    input,
    textarea {
        margin: 0px 10px;
        width: 70%;
    }

    input[type="button"],
    [type="submit"] {
        height: 30px;
        width: 60px;
    }
    </style>
</head>

<body>
    <h1>記事入力画面</h1>
    <form action="./contents_regist.php" id="regist" method="POST">
        <!-- <div>
            <label for="name">投稿者名</label>
            <input type="text" id="name" name="name" />
        </div> -->
        <div class="input">
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" />
        </div>
        <div class="input">
            <label for="contents">コンテンツ</label>
            <textarea id="contents" name="contents" rows="5" cols="5"></textarea>
        </div>
        <div class="" style="text-align: center">
            <input type="submit" value="登録" />
        </div>
    </form>
    <div class="" style="text-align: center">
        <input type="button" onclick="location.href='./index.php'" value="HOME">
        <input type="button" onclick="location.href='./view.php'" value="閲覧">
    </div>
</body>

</html>