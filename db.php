<?php
//1 шаг - Соединяемся с базой данных
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "avtodorogi";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//$con = mysqli_connect($host, "root", "", "avtodorogi");
//2шаг - делаем проверку на подключение
if($con == false){
echo"Ошибка подключения:" .mysqli_connect_error();

}
else {
echo"Соединение установлено";
}
//прописываем кодировку UTF-8
mysqli_set_charset($con, "utf8");
?>