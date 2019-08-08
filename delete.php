<?php

require_once('Models/Todo.php');

//deleteボタンを押したら、対象のレコードを削除して
$id = $_GET['id'];

//データの削除


//Todoクラスをインスタンス化
$todo = new Todo;

$todo->delete($id);
//一覧画面に戻る
header('location: index.php');
//Todoクラスのcreateメソッドを実行

//プライマリーキー
//aタグはgetでしか送れない