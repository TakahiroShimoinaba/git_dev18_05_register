<?php
// ファイルを開く
// rは読み込みのみ。openする
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力する
// while ($line = fgets($openFile)) {
//     echo nl2br($line);
// }


// fgetは1行目だけ読み込む関数。fopenで開けたファイルの中身を読んでいく。
// それを$lineの変数の中に入れ、エコーする。
// while文なので続いていく
// 次に何も無ければ＝falseになったら処理を終了する

// 「nl2br」は改行

// ファイルを閉じる

fclose($openFIle);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php結果表示</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class = "title">登録結果一覧</div>

<table width="80%"  class = "table">

    <!-- 列のタイトル） -->
    <tr>
        <th>登録日時</th>
        <th>名前</th>
        <th>email</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>好きな国</th>
    </tr>

    <!-- 表の2行目以降（各データを取り出して、2行目以降に書き込む）     -->

    <?php

    //開いたファイルのデータを格納する
    while ($data = fgets($openFile)){

        // echo $data;

        // ”/”がある位置でデータを分割：[0]日時、[1]名前、[2]email、[3]住所、[4]電話番号、[５]行ってみたい国
        $split_data = preg_split('/\//',$data);

        // echo '<br>';
        // var_dump($split_data);


    ?>

        <!-- 分割したデータの書き込み -->
        <tr>

            <td><?php print(htmlspecialchars($split_data[0])); ?></td>
            <td><?php print(htmlspecialchars($split_data[1])); ?></td>
            <td><?php print(htmlspecialchars($split_data[2])); ?></td>
            <td><?php print(htmlspecialchars($split_data[3])); ?></td>
            <td><?php print(htmlspecialchars($split_data[4])); ?></td>
            <td><?php print(htmlspecialchars($split_data[5])); ?></td>
            
        </tr>

     <!-- whileの閉じカッコのphp -->
    <?php
    }
    ?>

</table>



<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/test.js"></script>

</body>