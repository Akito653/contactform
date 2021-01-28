<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
<title>お問合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問合わせ内容確認</h1>
    
    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
            <br> よろしければ「送信する」ボタンを押して下さい。
        </p>
        <p>名前
            <br>
            山田太郎        </p>
        <p>メールアドレス
            <br>
            yamadataro@gmail.com        </p>
        <p>年齢
            <br>
            25歳        </p>

        <p>コメント
        <br>
        山田太郎です        </p>
        <form action="index.html">
            <input type="submit" class="button1" value="戻って修正する" />
        </form>
        <form action="insert.php" method="post">
            <input type="submit" class="button2" value="登録する" />
            <input type="hidden" value="山田太郎" name="name">
            <input type="hidden" value="yamadataro@gmail.com" name="mail">
            <input type="hidden" value="25" name="age">
            <input type="hidden" value="山田太郎です" name="comments">
        </form>
    </div>
</body>
</html>