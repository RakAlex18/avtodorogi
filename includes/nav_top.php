<!--ВЕРХНЯЯ НАВИГАЦИОННАЯ ПАНЕЛЬ-->
<nav id='menu' class="menu navbar navbar-expand-lg">
    <a class="navbar-brand" href="../index.php" style="color: #ef6c00">Avtodorogi.by</a> <!--изменил цвет брэнда-->
    <!--изменил цвет тогглера-->
    <button style="background-color: #ef6c00" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../news.php">Новости <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Технологии
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Содержание</a>
                    <a class="dropdown-item" href="#">Ремонт</a>
                    <a class="dropdown-item" href="#">Строительство</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Проектирование</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Техника
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Автобитумовоз</a>
                    <a class="dropdown-item" href="#">Автогудронатор</a>
                    <a class="dropdown-item" href="#">Автогрейдер</a>
                    <a class="dropdown-item" href="#">Автосамосвал</a>
                    <a class="dropdown-item" href="#">Асфальтоукладчик</a>
                    <a class="dropdown-item" href="#">Бульдозер</a>
                    <a class="dropdown-item" href="#">Каток</a>
                    <a class="dropdown-item" href="#">Поливо-моечная</a>
                    <a class="dropdown-item" href="#">Погрузчик</a>
                    <a class="dropdown-item" href="#">Скрепер</a>
                    <a class="dropdown-item" href="#">Экскаватор</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Библиотека
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">ТНПА</a>
                    <a class="dropdown-item" href="#">Книги</a>
                    <a class="dropdown-item" href="#">Научные статьи</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Студентам
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Контрольные</a>
                    <a class="dropdown-item" href="#">Курсовые</a>
                    <a class="dropdown-item" href="#">Дипломы</a>
                </div>
            </li>
        </ul>
        <form action="../search.php" method="post" class="search form-inline my-2 my-lg-0">
            <input name = "search" class="form-control mr-sm-2" type="search" placeholder="Поиск..." aria-label="Search">
            <button name = "submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
        </form>
    </div>
</nav>