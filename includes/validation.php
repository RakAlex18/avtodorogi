<?php session_start(); ?>
<?php ob_start();?> <!--стартует буфер-->
<?php require_once "../db.php"; ?>
<?php
$firstName = htmlspecialchars(strip_tags(trim($_POST["firstName"])));
$lastName = htmlspecialchars(strip_tags(trim($_POST["lastName"])));
$login = htmlspecialchars(strip_tags(trim($_POST["login"])));
$email = htmlspecialchars(strip_tags(trim($_POST["email"])));
$password = $_POST["password"];
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

//ДОБАВЛЯЕМ В БД
if (isset($_POST['registr'])) {
    global $con;//делаем глобальной переменную соединения с БД
    $firstName = $_POST['firstName']; /*записываем в переменную данные из инпута*/
    $lastName = $_POST['lastName']; /*записываем в переменную данные из lastName*/
    $login = $_POST['login']; //записываем в переменную данные из инпута login
    $email = $_POST['email']; //записываем в переменную данные из инпута
    $password = $_POST['password']; //записываем в переменную данные из инпута
    $insert_users = "INSERT INTO users(firstName, lastName, login, email, password) VALUES ('$firstName', '$lastName', '$login', '$email', '$password')";
    $res_insert = mysqli_query($con, $insert_users);
    if (!$res_insert) {
        die('Query FAILED' . mysqli_error());
    } else { ?>
        <script>alert("Пользователь успешно записан в БД");</script>
        <?php
       //header("Location:../index.php", TRUE);

    }
}

?>




