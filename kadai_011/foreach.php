<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $vesitable_items = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach($vesitable_items as $key => $value){
        echo "{$key}:{$value}";
        echo '<br>';
    }
    ?>
</body>
</html>