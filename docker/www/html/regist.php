<!DOCTYPE html>
<html lang="ja">

<head>
    <title>記事 - 入力画面</title>
    <style>
    h1 {
        text-align: center;
        font-size: 24px;
    }

    div {
        margin: 20px 10px;
    }

    label {
        vertical-align: top;
    }

    input,
    textarea {
        margin: 0px 10px;
    }

    textarea {
        width: 80%;
    }

    input[type="submit"] {
        margin: 20px;
        position: absolute;
        right: 20px;
        bottom: 20px;
    }

    #title {
        width: 80%;
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
        <div>
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" />
        </div>
        <!-- <div>
            <label for="contents">コンテンツ</label>
            <textarea id="contents" name="contents" rows="5" cols="5"></textarea>
        </div> -->
        <input type="submit" value="確認" />
    </form>
    <!-- <div class="" style="text-align: center">
        <input type="button" onclick="location.href='./index.php'" value="ホーム画面">
    </div>
    <div class="" style="text-align: center">
        <input type="button" onclick="location.href='./view.php'" value="閲覧">
    </div> -->
</body>

</html>