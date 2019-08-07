<?php

require_once('config/dbconnect.php');

//todo
//1つのクラスに、一つの役割がある
//tasksテーブルとのやりとりをする
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
    //dbからデータを全て取得するメソッド
    public function getAll()
    {
        //return === 関数の呼び出し元に、値に返す
        //実行するsql文を準備
        //$this === このクラスのインスタンス
        //db_manager
            //このクラスのインスタンスのプロパティ
            //DbManagerクラスのインスタンス
        //dbh
            //db_managerのプロパティ
        //prepare
            //dbhのメソッド 
            //PDOインスタンスの、メソッド
            //()がついていつのがメソッド
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table);

        //準備したsqlを実行する
        //$dbh ===PDoクラスのインスタンス
        

        $stmt->execute();
        //実行結果を取得
        $tasks = $stmt->fetchAll();
        //return===関数の呼び出し元に、値を返す
        return $tasks;
    }

    public function get($id)
    {
        //$idと一致するidをもつレコードを取得する

        //準備する
        $stmt = $this->db_manager->dbh->prepare('SELECT * FROM ' . $this->table . ' WHERE id = ?');
        //実行する
        //[0 => 1]
        $stmt->execute([$id]);
       
        //実行結果を変数に代入する
        $task = $stmt->fetch();

        //結果を関数の呼び出し元に返す
        return $task;
    }

    public function update($id,$name){
        $stmt = $this->db_manager->dbh->prepare('UPDATE ' . $this->table . ' SET name = ? WHERE id = ?');
        $stmt->execute([$name,$id]);

    }
}