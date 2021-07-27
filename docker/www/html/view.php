<?php
    $pdo = new PDO(
        "mysql:dbname=myDB;host=ab6427231e43","root","secret"
    );

    $stmt = $pdo->query("SELECT * FROM T_CONTENTS ORDER BY insert_date DESC");

    //レコード件数取得
	$row_count = $stmt->rowCount();

    while($row = $stmt->fetch()){
		$rows[] = $row;
	}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <title>記事 - 閲覧画面</title>
    <style>
    body {
        background-color: #99CCFF;
    }

    .news-area {
        border: 2px solid;
        margin:30px 40px;
        background-color: #FFF;
        padding: 20px;
    }

    .title {
        text-align: center;
        font-weight: bold;
    }

    .insert-date {
        font-size: 10px;
    }

    .content-area {
        border: 1px solid;
        margin: 10px auto;
        padding: 20px;
        font-size: 10px;
    }
    </style>
</head>

<body>
    レコード件数：<?php echo $row_count; ?>
    <table border='1'>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>contents</td>
            <td>insert_date</td>
            <td>update_date</td>
        </tr>

        <?php 
foreach($rows as $row){
?>
        <div class="news-area">
            <div class="title">
                <?php echo $row['title']; ?>
            </div>
            <div class="insert-date">
                投稿日時：<?php echo $row['insert_date']; ?>
            </div>
            <div class="content-area">
                <?php echo $row['contents']; ?>
            </div>
        </div>
        <tr>
            <td><?php echo $row['contents_id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['contents']; ?></td>
            <td><?php echo $row['insert_date']; ?></td>
            <td><?php echo $row['update_date']; ?></td>
        </tr>
        <?php 
} 
?>

    </table>
</body>

</html>