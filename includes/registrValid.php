<?php
$firstName = htmlspecialchars(strip_tags(trim($_POST["firstName"])));
$lastName = htmlspecialchars(strip_tags(trim($_POST["lastName"])));
$login = htmlspecialchars(strip_tags(trim($_POST["login"])));
$email = htmlspecialchars(strip_tags(trim($_POST["email"])));
$password = $_POST["password"];
$file = "users.txt";//создаем файла
$handle = fopen($file, "a+");//открываем файл в режиме а+
$loginFile = "Login: " . $login; // создаем строку для логина, которую будем писать в файл
$passwordFile = "Password: " . $password . '' . "\r\n"; // создаем строку для пароля, которую будем писать в файл
$emailFile = "E-mail: " . $email . '' . "\r\n"; // создаем строку для email, которую будем писать в файл
// Делаем проверки, что поля не пустые
if (empty($login)) {
    ?>
    <script>alert("Введите логин")</script>
    <?php
    echo "<b>Не указан Ваш логин!<p>";
    echo "<a href=../registration.php>Вернуться к заполнению формы</a>";
    exit;
}

if (empty($email)) {
    ?>
    <script>alert("Введите адрес электронной почты")</script>
    <?php
    echo "<b>Не указан адрес электронной почты!<p>";
    echo "<a href=../registration.php>Вернуться к заполнению формы</a>";
    exit;
} else
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//проверяем эл.адрес на валидацию
        echo "<b> E-mail адрес '$email' указан неверно <b> <br>";
        echo "<a href=../registration.php>Вернуться к заполнению формы</a>";
        exit;
    }

if (empty($password)) {
    ?>
    <script>alert("Введите пароль")</script>
    <?php
    echo "<b>Не указан пароль!<b> <br>";
    echo "<a href=../registration.php>Вернуться к заполнению формы</a>";
    exit;
}
// Делаем проверку на длину логина
if (strlen($login) < 3 or strlen($login) > 30) {
    echo "<b>Логин должен состоять не менее чем из 3 символов и не более 30!<b> <br>";
    echo "<a href=../registration.php>Вернуться к заполнению формы</a>";
    exit;
}
$availability = strpos(file_get_contents($file), $loginFile); /*провяряем существование логина в файле - strpos возвращает позицию строки, начиная с 0. А 0 - это false.
 Если строки такой нет -  возвращает false*/

if (($availability === 0) || ($availability)) {
    echo "<b>Данный логин уже занят!<b> <br>";
    echo "<a href=../registration.php>Вернуться к заполнению формы</a>";
    exit;

}
fwrite($handle, $loginFile . "\r\n");
fwrite($handle, $passwordFile);
fwrite($handle, $emailFile);
fclose($handle);/*закрываем файл, с которым работали*/

?>



