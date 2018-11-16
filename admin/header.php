<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админпанель</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700i,900&amp;subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main_admin.css"> <!-- Подключаем CSS -->
    <link rel="stylesheet" href="fontawesome-free-5.4.1-web/css/all.css"/> <!-- Подключаем иконки -->
</head>
<body>
<header id='header' class='header'>
    <div class="container-fluid">
        <div class="row justify-content-sm-between justify-content-center align-items-center">
            <div class="col-lg-3 col-sm-5 col-auto">
                <img src="img/Logo_1.png" alt="logo" class="logo">
            </div>
            <div class="col-lg-7 col-sm-4 description text-center">
                ПАНЕЛЬ АДМИНИСТРАТОРА


            </div>
            <div class="col-lg-2 col-sm-3 col-auto">
                <small>
                    Hello,
                    <?php
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message']['login'];
                        echo "<br>";
                        echo $_SESSION['message']['text'];
                    }
                    ?>
                </small>
                <form action="../logout.php" method="post">
                    <input type="submit" name="logout" value="Выйти">
                </form>
            </div>
        </div>
    </div>
</header>

<!--ВЕРХНЯЯ НАВИГАЦИОННАЯ ПАНЕЛЬ-->
<nav id='menu' class="menu navbar navbar-expand-lg">
    <a class="navbar-brand" href="../index.php" style="color: #ef6c00">Главная</a> <!--изменил цвет брэнда-->
    <!--изменил цвет тогглера-->
    <button style="background-color: #ef6c00" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Новости и авторы
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="create_news.php">Создать новость</a>
                    <a class="dropdown-item" href="update_news.php?page=1">Редактировать новости</a>
                    <a class="dropdown-item" href="create_author.php">Добавить автора</a>
                    <a class="dropdown-item" href="update_authors.php">Все авторы</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Пользователи
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="create_users.php">Создать</a>
                    <a class="dropdown-item" href="update_users.php?page=1">Редактировать</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Технологии
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Создать</a>
                    <a class="dropdown-item" href="#">Редактировать</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Техника
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Создать</a>
                    <a class="dropdown-item" href="#">Редактировать</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

