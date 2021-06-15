<?php

// ファイルの読み込み
require_once('./Models/Task.php');

// データの受け取り
// スーパーグローバル変数

$title = $_POST['title'];
$contents = $_POST['contents'];
$time = date("Y/m/d H:i:m");


// DBへのデータ保存
$task = new Task(); 　// インスタンス化
$task->create([$title, $contents, $time]);

// リダイレクト
header('location:index.php');
