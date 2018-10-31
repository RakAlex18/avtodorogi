<?php session_start(); ?>

<?php require_once "../db.php"; ?>

<?php
function createNews()
{
//проверяем, если переменная определена (т.е. кнопка нажата)
    if (!isset($_POST['submit'])) {
        global $con;//делаем глобальной переменную соединения с БД
        $title = $_POST['title']; /*записываем в переменную данные из инпута title*/
        $content = $_POST['content']; /*записываем в переменную данные из textarea - content*/
        $link_content = $_POST['link_content']; //записываем в переменную данные из инпута link_content
        cleaning("$title");//запускаем функцию очистки
        cleaning("$content");
        cleaning("$link_content");
        $insert_news = "INSERT INTO news(title, content, link_content) VALUES ('$title', '$content', '$link_content')";
        mysqli_query($con, $insert_news);
    } else {
        die('Query FAILED' . mysqli_error());
    }
}

function cleaning($text)
{
    return $text = htmlspecialchars(strip_tags(trim($text)));
    // echo $text;
}

function updateNews()
{
    global $con;//делаем глобальной переменную соединения с БД

}
    ?>