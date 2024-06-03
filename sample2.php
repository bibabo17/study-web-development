<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <meta name="title" content="web開発4回目" />
</head>
<body>
    <?php
    #一日は何時間がある
    $hours = 24;
    #一時間は何分がある
    $minutes = 60;
    #一分は何秒がある
    $seconds = 60;
    $secondsInDay = $hours * $minutes * $seconds;
    echo "1日は $secondsInDay 秒があります"
    ?>
</body>
</html>