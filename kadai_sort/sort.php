<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order) {
            if($order == 'true'){
                // 昇順ソート
                echo '昇順ソートにします。'.'<br>';
                sort($array);
                foreach($array as $num){
                    echo $num . '<br>';
                }
            }elseif($order == 'false'){
                // 降順ソート
                echo '降順ソートにします。'.'<br>';
                rsort($array);
                foreach($array as $num){
                    echo $num . '<br>';
                }
            }
        }
        
        sort_2way($nums, 'true');
        sort_2way($nums, 'false');
        
        ?>
    </p>
</body>

</html>