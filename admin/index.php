<?php session_start(); ?>


<?php include "header.php"; ?>

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
                    Новости
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="create_news.php">Создать</a>
                    <a class="dropdown-item" href="update_news.php">Редактировать</a>

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

<?php include "footer.php"; ?>