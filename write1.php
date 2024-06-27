<?php
$name = $_GET['your name'];
$email = $_GET['email address'];

// ファイルに書き込み
date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');
//文字作成
$data = $time . $name . $email . "\n";
file_put_contents('data/data1.txt', $data, FILE_APPEND);
?> 

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>Login databese</h1>
    <h2>Let's check./data/data1.txt </h2>

    <ul>
        <li><a href="read1.php">Check</a></li>
        <li><a href="post1.php">Back</a></li>
    </ul>
</body>

</html>