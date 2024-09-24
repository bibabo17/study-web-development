<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>名前を送信するフォーム</h1>

    <form action="process.php" method="POST">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name">
        <button type="submit">送信</button>
    </form>
</body>
</html>