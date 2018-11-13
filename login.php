<?php session_start();

ob_start(); //стартует буфер

require_once "db.php"; ?>

<?php
if (isset($_POST['admin'])) {
    //значения от пользователя
    $login = $_POST['login'];
    if (empty($login)) {

        echo "<b>Введите логин!<b>";
        echo "<a href=/index.php>Вернуться к заполнению формы</a>";
        exit;
    }

    $password = $_POST['password'];
    if (empty($password)) {

        echo "<b>Введите пароль!<b> <br>";
        echo "<a href=/index.php>Вернуться к заполнению формы</a>";
        exit;
    }
    $sql_login = "SELECT login, password FROM users WHERE login = '$login'";
    $login_query = mysqli_query($con, $sql_login);
    foreach ($login_query as $item) {
        //значения из базы данных
        $db_login = $item['login'];
        $db_password = $item['password'];
        echo $db_login;
        echo $db_password;
    }
    if ($login != $db_login && $password != $db_password) {
        header("Location:/index.php", TRUE);
    } elseif ($login == $db_login && $password == $db_password) {
        $_SESSION['login'] = $db_login;
        header("Location:/admin", TRUE);
    }
    ob_end_flush();//прекращает буфер
}
?>