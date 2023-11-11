<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHPの四則演算課題じゃ</title>
 </head>
 
 <body>
     <p>
         <?php

$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

$totalScore = 0;

for ($i = 1; $i <= 10; $i++) {
    $totalScore += ${"score" . $i};
}

echo "合計値は: " . $totalScore;
echo '<br>';
echo "平均値は: " . $totalScore/10;
?>
</p>
</body>

</html>