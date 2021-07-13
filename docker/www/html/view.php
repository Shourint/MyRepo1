<!DOCTYPE html>
<html lang="ja">

<head>
    <title>記事 - 閲覧画面</title>
    <style>
    h1 {
        text-align: center;
        font-size: 24px;
    }
    </style>
</head>

<body>
    <div class="">
        
    </div>
    <h1></h1>
    <form id="form" method="PUT">
        <div>
            <label for="name">投稿者名</label>
            <input type="text" id="name" name="name" />
        </div>
        <div>
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" />
        </div>
        <div>
            <label for="detail">コンテンツ</label>
            <textarea id="detail" name="detail" rows="5" cols="5"></textarea>
        </div>
        <input type="submit" value="確認" />
    </form>
</body>

</html>