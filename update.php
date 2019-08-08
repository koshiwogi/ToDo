<?php

require_once('Models/Todo.php');
//データ更新
//更新するでーたを特定する

//データの受け取り
//id,task
$id = $_POST['id'];
$task_name = $_POST['task'];

//更新
//todoクラスのインスタンスを$todoに代入
$todo = new Todo();



//Todoクラスのupdateメソッドを実行
 $todo->update($id,$task_name);


//一覧画面にもどる
header('location: index.php');
