<?php

require_once('config/dbconnect.php');

//todo
class Todo
{   //プロパティー
    private $table = 'tasks';
    private $db_manager;

    //インスタンス化した時に呼ばれるメソッド
    public function __construct()
    {       //db_manageプロパティーは
        //DbManagerクラスのインスタンス
        //dbhプロパティーの
        //pdoのインスタンス
        //prepareメッソドを実行
        //クラスは一つのことを実行すればいい　//シングルタスク
        $this->db_manager = new DbManager();
        $this->db_manager->connect();
    }

    public function create($name)
    {
        // dbに保存
        //このクラスのインスタンスの
        //db_managerプロパティーの
        //dbhプロパティーの
        //prepareメソッドを実行
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (name) VALUES (?)');
        $stmt->execute([$name]);
    }
}