<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHPの連想配列課題じゃ</title>
 </head>
 
 <body>
     <p>
         <?php
    $shopping_catalogue = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    
    foreach ($shopping_catalogue as $index => $value) {
      echo "{$index}：{$value}<br>";
    }
?>
</p>
</body>

</html>