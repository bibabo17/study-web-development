<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>画像アップロード</h2>

    <form action="sample11.php" method="POST" enctype="multipart/form-data">
        <label for="file">>ファイルを選択:</label>
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="送信する" name="submit">
    </form>

    <?php
    if (isset($_FILES['file'])) {
        // ファイル情報を取得
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        $fileSize = $_FILES['file']['size'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($fileName);

        // アップロードされたファイルを保存
        if (move_uploaded_file($fileTmp, $uploadFile)) {
            echo "<h3>アップロード成功</h3>";
            echo "ファイル名: " . htmlspecialchars($fileName) . "<br>";
            echo "ファイルタイプ: " . htmlspecialchars($fileType) . "<br>";
            echo "ファイルサイズ: " . htmlspecialchars($fileSize) . " バイト<br>";
            echo "<img src='$uploadFile' alt='Uploaded image' width='300'><br>";
        } else {
            echo "ファイルのアップロードに失敗しました。";
        }
    }
    ?>
</body>
</html>