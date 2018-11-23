<?php
class Database {
    //
    protected $connection;
    /*Создаем конструктор подключения к БД*/
    public function __construct($db_host, $db_user, $db_pass, $db_name)
    {
        $this->connection = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if(!$this->connection){
            echo "Ошибка подключения";
        }
    }
    /*Метод экранирования символов*/
    public function escape($str){
        return mysqli_escape_string($this->connection, $str);
    }
    /*Метод обработки запроса к БД*/
    public function selectAll($sql){
        $result = $this->connection->query($sql);
        $data = [];
        foreach ($result as $item){
            $data[] = $item;
        }
        return $data;
    }


}
?>