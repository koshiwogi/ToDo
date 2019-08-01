<?php
//Todo.phpを読み込む
require_once('Models/Todo.php');
//ユーザーが入力した内容を取得
//$taskっていう変数にユーザーが入力した内容代入
//$task = ユーザーがにゅうりょくした内容
$task = $_POST['task'];

//dbに保存


//todo クラスをインンスタンス化して$todoに代入
$todo = new Todo();


//todoクラスのインスタンス
//createメソッドを実行
$todo->create($task);




//一覧画面に戻る
header('location: index.php');

//関数名（引数、引数、引数）;gid