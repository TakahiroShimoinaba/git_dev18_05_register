<?php

// ・input.phpからフォームを受取




$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$kuni = $_POST['kuni'];

// ・name変数とmail変数にフォームの中身を入れる
// ・$timeに加えて、フォームから来る名前とメールの内容をdata.textに記録する

// ファイルに書き込み

$time = date('Y-m-d H:i:s');
$file = fopen('./data/data.txt', 'a');
fwrite($file, $time . ' / '. $name . ' / '. $email. ' / '. $address. ' / '. $phone. ' / '. $kuni. "\n");
fclose($file);

// "\n"は改行


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>登録が完了しました。</h1>
    <p>ご協力ありがとうございました。</p>

    <!-- 
    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul> 
    -->

</body>

</html>
