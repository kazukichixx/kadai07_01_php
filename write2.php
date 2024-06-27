<?php
$name = $_GET['name'];
$birthPlace = $_GET['birthPlace'];

// ファイルに書き込み
date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');
//文字作成
$data = $time . $name . $birthPlace . "\n";
file_put_contents('data/data2.txt', $data, FILE_APPEND);
?> 

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>Feedback is complete. thank you!</h1>
    <h2>Let's check./data/data.txt </h2>

    <ul>
        <li><a href="read2.php">Check</a></li>
        <li><a href="post2.php">Back</a></li>
    </ul>
</body>

</html>