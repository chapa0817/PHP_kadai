<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php

function sort_2way($array, $order) {
    if ($order) {
        // 昇順にソート
        sort($array);
        echo "昇順にソートします。<br>";
        foreach ($array as $value) {
            echo $value . "<br>";
        }
    } else {
        // 降順にソート
        rsort($array);
        echo "降順にソートします。<br>";
        foreach ($array as $value) {
            echo $value . "<br>";
        }
    }
}

$nums = [15, 4, 18, 23, 10];
$orderAsc = true; // 昇順
$orderDesc = false; // 降順

sort_2way($nums, $orderAsc);

?>
    </p>
</body>

</html>

