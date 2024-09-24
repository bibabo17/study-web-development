<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>名前を送信するフォーム</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];

        $escaped_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

        echo "<h2>送信された名前:</h2>";
        echo "<p>" . $escaped_name . "</p>";
    } else {
    ?>

        <form action="" method="POST">
          <label for="name">名前:</label>
         <input type="text" id="name" name="name">
         <button type="submit">送信</button>
      </form>
    <?php
    }
    ?>
</body>
</html>