<?php session_start(); ?>
<?php if (!empty($_SESSION['auth'])) {
    ?>
    <!--ВЫВОД ВСЕХ НОВОСТЕЙ В ТАБЛИЦУ с кнопками РЕДАКТИРОВАТЬ и УДАЛИТЬ-->
    <?php require_once "db.php"; ?>

    <?php include "header.php"; ?>

    <form action="" method="post" class="container-fluid form-horizontal" role="form">
        <br>
        <a class="btn btn-success btn-block" href="index.php">Вернуться назад</a>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-hover"
                       cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">ID
                            <!--<i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                        </th>
                        <th class="th-sm">Title
                            <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                        </th>
                        <th class="th-sm">Content
                            <!--<i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                        </th>
                        <th class="th-sm">ID_author
                            <!--<i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                        </th>
                        <th class="th-sm">Pub_date
                            <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                        </th>
                        <th class="th-sm">Link_content
                            <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                        </th>
                        <th class="th-sm">img_news
                            <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                        </th>
                        <th class="th-sm">Button
                            <!-- <i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    //https://www.kaminskiy-web.com/stati/postranichnyy-vyvod-dannyh-na-php-i-mysql.xhtml
                    //Постраничный вывод данных на PHP и MySQL
                    if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    // Устанавливаем количество записей, которые будут выводиться на одной странице
                    $quantity = 7;

                    // Ограничиваем количество ссылок, которые будут выводиться перед и
                    // после текущей страницы
                    $limit = 3;

                    // Если значение page= не является числом, то показываем
                    // пользователю первую страницу
                    if (!is_numeric($page)) {
                        $page = 1;
                    }

                    // Если пользователь вручную поменяет в адресной строке значение page= на нуль,
                    // то мы определим это и поменяем на единицу, то-есть отправим на первую
                    // страницу, чтобы избежать ошибки
                    if ($page < 1) {
                        $page = 1;
                    }

                    // Узнаем количество всех доступных записей
                    $news_rows = mysqli_query($con, "SELECT * FROM news");
                    $num = mysqli_num_rows($news_rows);
                    // echo $num;=94

                    // Вычисляем количество страниц, чтобы знать сколько ссылок выводить
                    $pages = $num / $quantity;

                    // Округляем полученное число страниц в большую сторону
                    $pages = ceil($pages);
                    // echo $pages;=13.4=14
                    // Здесь мы увеличиваем число страниц на единицу чтобы начальное значение было
                    // равно единице, а не нулю. Значение page= будет
                    // совпадать с цифрой в ссылке, которую будут видеть посетители
                    $pages++;
                    // echo $pages; // = 14+1=15
                    // Если значение page= больше числа страниц, то выводим первую страницу
                    if ($page > $pages) {
                        $page = 1;
                    }

                    // Выводим заголовок с номером текущей страницы
                    echo '<strong style="color: #df0000">Страница № ' . $page .
                        '</strong><br /><br />';

                    // Переменная $list указывает с какой записи начинать выводить данные.
                    // Если это число не определено, то будем выводить
                    // с самого начала, то-есть с нулевой записи
                    if (!isset($list)) {
                        $list = 0;
                    }
                    // Чтобы у нас значение page= в адресе ссылки совпадало с номером
                    // страницы мы будем его увеличивать на единицу при выводе ссылок, а
                    // здесь наоборот уменьшаем, чтобы ничего не нарушить.
                    $list = --$page * $quantity;

                    // echo $list . '<br>';// =0*7=0
                    // Делаем запрос подставляя значения переменных $quantity и $list

                    $select_news = "SELECT *  FROM news WHERE id>0 ORDER BY id DESC LIMIT $quantity OFFSET $list";
                    //передаем 2 параметра: подключение из db.php и $select_news
                    $res_select = mysqli_query($con, $select_news);

                    // Считаем количество полученных записей
                    $num_result = mysqli_num_rows($res_select);
                    // echo $num_result;=7
                    // Выводим все записи текущей страницы
                    for ($i = 0;
                    $i < $num_result;
                    $i++) {
                    $last_news = mysqli_fetch_assoc($res_select);
                    ?>
                    <tr>
                        <td><?= $last_news['id'] ?></td>
                        <td><?= $last_news['title'] ?></td>
                        <!--выводим первые 250 симоволов контена-->
                        <td><?= substr($last_news['content'], 0, 250) ?></td>
                        <td><?= $last_news['id_author'] ?></td>
                        <td><?= $last_news['pub_date'] ?></td>
                        <td><?= $last_news['link_content'] ?></td>
                        <td>
                            <img src="img/news/<?= $last_news['img_news'] ?>" alt="" width="100%">
                        </td>
                        <td>
                            <input name="update" type="submit" formaction="updateNews.php?id=<?= $last_news['id'] ?>"
                                   value="Редактировать"
                                   class="btn btn-success btn-block">
                            <!--если переменная не пустая - разрешаем удалять новости, иначе - запрещено-->
                            <?php if (!empty($_SESSION['delete'])) { ?>
                                <input type="submit" formaction="deleteNews.php?id=<?= $last_news['id'] ?>"
                                       value="Удалить"
                                       class="btn btn-warning btn-block">
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    </tbody>
                    <?php

                    }

                    ?>
                </table>
                <?php
                echo 'Страницы: ';
                // echo $page;=0
                // _________________ начало блока 1 _________________
                // Выводим ссылки "назад" и "на первую страницу"
                if ($page >= 1) {

                    // Значение page= для первой страницы всегда равно единице,
                    // поэтому так и пишем
                    echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=1"><<</a> &nbsp; ';

                    // Так как мы количество страниц до этого уменьшили на единицу,
                    // то для того, чтобы попасть на предыдущую страницу,
                    // нам не нужно ничего вычислять
                    echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . $page .
                        '">< </a> &nbsp; ';
                }

                // __________________ конец блока 1 __________________

                // На данном этапе номер текущей страницы = $page+1
                $this_page = $page + 1;

                // Узнаем с какой ссылки начинать вывод
                $start = $this_page - $limit;

                // Узнаем номер последней ссылки для вывода
                $end = $this_page + $limit;

                // Выводим ссылки на все страницы
                // Начальное число $j в нашем случае должно равняться единице, а не нулю
                for ($j = 1; $j < $pages; $j++) {

                    // Выводим ссылки только в том случае, если их номер больше или равен
                    // начальному значению, и меньше или равен конечному значению
                    if ($j >= $start && $j <= $end) {

                        // Ссылка на текущую страницу выделяется жирным
                        if ($j == ($page + 1)) echo '<a href="' . $_SERVER['SCRIPT_NAME'] .
                            '?page=' . $j . '"><strong style="color: #df0000">' . $j .
                            '</strong></a> &nbsp; ';

                        // Ссылки на остальные страницы
                        else echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' .
                            $j . '">' . $j . '</a> &nbsp; ';
                    }
                }

                // _________________ начало блока 2 _________________
                // Выводим ссылки "вперед" и "на последнюю страницу"
                if ($j > $page && ($page + 2) < $j) {

                    // Чтобы попасть на следующую страницу нужно увеличить $pages на 2
                    echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . ($page + 2) .
                        '"> ></a> &nbsp; ';

                    // Так как у нас $j = количество страниц + 1, то теперь
                    // уменьшаем его на единицу и получаем ссылку на последнюю страницу
                    echo '<a href="' . $_SERVER['SCRIPT_NAME'] . '?page=' . ($j - 1) .
                        '">>></a> &nbsp; ';
                }

                // __________________ конец блока 2 __________________
                }
                ?>
            </div>

        </div>
    </form> <!-- /form -->
    <a class="btn btn-success btn-block" href="index.php">Вернуться назад</a>


    <?php include "footer.php"; ?>
    <?php
} else {
    header("Location:/index.php", TRUE);
} ?>
