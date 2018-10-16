<?php
$firstName = htmlspecialchars(strip_tags(trim($_POST["firstName"])));
$lastName = htmlspecialchars(strip_tags(trim($_POST["lastName"])));
$login = htmlspecialchars(strip_tags(trim($_POST["login"])));

if(empty($login)) {
?>
<script>alert ("Введите логин")</script>
<?php
    echo "<b>Не указано имя!<p>";
        echo "<a href=../registration.php>Вернуться к заполнению формы</a>";
        exit;
}

?>
<?php
if (strlen($login) < 3) {
    echo "<b>Логин должен состоять не менее чем из 3 символов!<p>";
    echo "<a href=../registration.php>Вернуться к заполнению формы</a>";
    exit;
}
    ?>


