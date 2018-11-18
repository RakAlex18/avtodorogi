<?php session_start(); ?>

<?php require_once "db.php"; ?>

<?php

//функция СОЗДАТЬ АВТОРА
function createAuthor()
{
//проверяем, если переменная определена (т.е. кнопка нажата)
    if (isset($_POST['create_author'])) {
        global $con;//делаем глобальной переменную соединения с БД
        $name_author = $_POST['name_author']; /*записываем в переменную данные из инпута name*/
        $link_author = $_POST['link_author']; //записываем в переменную данные из инпута link_author
        cleaning("$name_author");//запускаем функцию очистки
        cleaning("$link_author");
        $insert_author = "INSERT INTO author(name_author, link_author) VALUES ('$name_author','$link_author')";
        $res_insert = mysqli_query($con, $insert_author);
        if (!$res_insert) {
            die('Query FAILED' . mysqli_error());
        } else { ?>
            <script>alert("Автор успешно записан в БД");</script>
            <?php
        }
    }
}


//функция СОЗДАТЬ НОВОСТЬ
function createNews()
{
//проверяем, если переменная определена (т.е. кнопка нажата)
    if (isset($_POST['create'])) {
        global $con;//делаем глобальной переменную соединения с БД
        $title = $_POST['title']; /*записываем в переменную данные из инпута title*/
        $content = $_POST['content']; /*записываем в переменную данные из textarea - content*/
        $link_content = $_POST['link_content']; //записываем в переменную данные из инпута link_content
        $id_author = $_POST['id_author']; //записываем в переменную данные из инпута id_author
        $pub_date = $_POST['pub_date']; //записываем в переменную данные из инпута
        cleaning("$title");//запускаем функцию очистки
        cleaning("$content");
        cleaning("$link_content");
        cleaning("$id_author");
        $insert_news = "INSERT INTO news(title, content, link_content, id_author, pub_date) VALUES ('$title', '$content', '$link_content', '$id_author', '$pub_date')";
        $res_insert = mysqli_query($con, $insert_news);
        if (!$res_insert) {
            die('Query FAILED' . mysqli_error());
        } else { ?>
            <script>alert("Новость успешно записана в БД");</script>
            <?php
        }
    }
}

//функция очистки текста от всякого
function cleaning($text)
{
    return $text = htmlspecialchars(strip_tags(trim($text)));
    // echo $text;
}

//функция РЕДАКТИРОВАНИЕ НОВОСТИ
function updateNews()
{
    global $con;//делаем глобальной переменную соединения с БД
    $id = $_GET['id']; //получаем id из URL
    if (isset($_POST['update'])) {
        $title = $_POST['title']; /*записываем в переменную данные из инпута title*/
        $content = $_POST['content_update']; /*записываем в переменную данные из textarea - content*/
        $id_author = $_POST['id_author']; /*записываем в переменную данные из инпута*/
        $pub_date = $_POST['pub_date']; /*записываем в переменную данные из инпута*/
        $link_content = $_POST['link_content']; //записываем в переменную данные из инпута link_content
        $update = "UPDATE news SET title='$title',content='$content',id_author='$id_author',pub_date='$pub_date',link_content='$link_content' WHERE id = $id";
        $res_update = mysqli_query($con, $update);
        if (!$res_update) {
            die('Query FAILED' . mysqli_error());
        } else {
            echo "Новость успешно изменена"; ?>
            <a class="btn btn-success btn-block" href="update_news.php?page=1">Вернуться назад</a>
            <?php
        }
        ?>

        <?php
    }
}

//функция РЕДАКТИРОВАНИЕ АВТОРА
function updateAuthors()
{
    global $con;//делаем глобальной переменную соединения с БД
    $id = $_GET['id_authors']; //получаем id из URL
    if (isset($_POST['updateAuthor'])) {
        $name_author = $_POST['name_author']; /*записываем в переменную данные из инпута*/
        $link_author = $_POST['link_author']; /*записываем в переменную данные из инпута*/
        $updateAuthor = "UPDATE author SET name_author='$name_author',link_author='$link_author' WHERE id_authors = $id";
        $res_update = mysqli_query($con, $updateAuthor);
        if (!$res_update) {
            die('Query FAILED' . mysqli_error());
        } else {
            echo "Автор успешно изменен"; ?>
            <a class="btn btn-success btn-block" href="update_authors.php">Вернуться назад</a>
            <?php
        }
    }
}

//функция РЕДАКТИРОВАНИЕ ПОЛЬЗОВАТЕЛЯ
function updateUsers()
{
    global $con;//делаем глобальной переменную соединения с БД
    $id = $_GET['id']; //получаем id из URL
    if (isset($_POST['updateUser'])) {
        $firstName = $_POST['firstName']; /*записываем в переменную данные из инпута*/
        $lastName = $_POST['lastName']; /*записываем в переменную данные*/
        $login = $_POST['login']; /*записываем в переменную данные из инпута*/
        $email = $_POST['email']; /*записываем в переменную данные из инпута*/
        $birthDate = $_POST['birthDate']; //записываем в переменную данные из инпута
        $password = $_POST['password']; //записываем в переменную данные из инпута
        $phoneNumber = $_POST['phoneNumber']; //записываем в переменную данные из инпута
        $registr_date = $_POST['registr_date']; //записываем в переменную данные из инпута
        $user_role = $_POST['user_role']; //записываем в переменную данные из инпута
        $update = "UPDATE users SET firstName='$firstName',lastName='$lastName',login='$login',email='$email',birthDate='$birthDate', password='$password', phoneNumber='$phoneNumber', registr_date='$registr_date', user_role='$user_role' WHERE id = $id";
        $res_update = mysqli_query($con, $update);
        if (!$res_update) {
            die('Query FAILED' . mysqli_error());
        } else {
            echo "Пользователь успешно изменен"; ?>
            <a class="btn btn-success btn-block" href="update_users.php?page=1">Вернуться назад</a>
            <?php
        }
        ?>

        <?php
    }
}

//функция УДАЛЕНИЕ НОВОСТИ
function deleteNews()
{
    $id = $_GET['id'];
    //echo $id;
    if (isset($_POST['delete'])) {
        global $con;//делаем глобальной переменную соединения с БД
        $delete_news = "DELETE FROM news WHERE id = $id";
        $res = mysqli_query($con, $delete_news);

        if (!$res) {
            die('Query FAILED' . mysqli_error());
            echo "Чтото не то";
        } else {
            echo "Новость успешно удалена"; ?>
            <a class="btn btn-success btn-block" href="update_news.php?page=1">Вернуться назад</a>
            <?php
        }
    }
}


//функция УДАЛЕНИЕ АВТОРА
function deleteAuthor()
{
    $id_authors = $_GET['id_authors'];
    //echo $id;
    if (isset($_POST['deleteAuthor'])) {
        global $con;//делаем глобальной переменную соединения с БД
        $delete_author = "DELETE FROM author WHERE id_authors = $id_authors";
        $res = mysqli_query($con, $delete_author);

        if (!$res) {
            die('Query FAILED' . mysqli_error());
            echo "Что-то не то";
        } else {
            echo "Автор успешно удален"; ?>
            <a class="btn btn-success btn-block" href="update_authors.php">Вернуться назад</a>
            <?php
        }
    }
}

//функция УДАЛЕНИЕ ПОЛЬЗОВАТЕЛЯ - ДОДЕЛАТЬ!!!!
function deleteUser()
{
    $id = $_GET['id'];
    //echo $id;
    if (isset($_POST['deleteUser'])) {
        global $con;//делаем глобальной переменную соединения с БД
        $delete_user = "DELETE FROM users WHERE id = $id";
        $res = mysqli_query($con, $delete_user);

        if (!$res) {
            die('Query FAILED' . mysqli_error());
            echo "Что-то не то";
        } else {
            echo "Пользователь успешно удален"; ?>
            <a class="btn btn-success btn-block" href="update_users.php?page=1">Вернуться назад</a>
            <?php
        }
    }
}
//функция СОЗДАТЬ ПОЛЬЗОВАТЕЛЯ
function createUsers()
{
//проверяем, если переменная определена (т.е. кнопка нажата)
    if (isset($_POST['registrUser'])) {
        global $con;//делаем глобальной переменную соединения с БД
        $firstName = $_POST['firstName']; /*записываем в переменную данные из инпута*/
        $lastName = $_POST['lastName'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $birthDate = $_POST['birthDate'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phoneNumber'];
        $user_role = $_POST['user_role'];
        $insert_users = "INSERT INTO users(firstName, lastName, login, email, birthDate, password, phoneNumber, user_role) VALUES ('$firstName', '$lastName', '$login', '$email', '$birthDate', '$password', '$phoneNumber', '$user_role')";
        $res_insert_users = mysqli_query($con, $insert_users);
        if (!$res_insert_users) {
            die('Query FAILED' . mysqli_error());
        } else { ?>
            <script>alert("Пользователь успешно записан в БД");</script>
            <?php
        }
    }
}

?>


