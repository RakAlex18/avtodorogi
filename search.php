<?php session_start(); ?>

<?php require_once "db.php";?>

<?php include "includes/header.php"; ?>
<?php include "includes/nav_top.php"; ?>

<section id="news" class="container news">
    <div class="row">
        <?php
        /*если существует POST запрос - нажатие кнопки ПОИСК*/
        if (isset($_POST['submit'])) {
            $search = $_POST['search'];/*из инпута поиск значение присваиваем переменной*/

            /* вытаскиваем данные из моей таблицы news со значением $search
             из колонки content или title*/
            $sql = "SELECT * FROM news WHERE content LIKE '%$search%' or title LIKE'%$search%'";
            //передаем 2 параметра: подключение из db.php и $sql
            $result_search = mysqli_query($con, $sql);
            //проверка на наличие ошибок
            if (!$result_search) {
                echo mysqli_error($con);
            }
            /*считаем количество найденных строк*/
            $count = mysqli_num_rows($result_search);
            if ($count == 0) {
                echo "<h1>По вашему запросу ничего не найдено</h1>";
            } else {
                echo "Найдено " . $count . " новостей";

                /*запускаем цикл из найденных новостей и выводим их*/
                foreach ($result_search as $news) {
                    ?>
                    <div class="col-md-12">
                        <div class="card-body text-center">
                            <img src="admin/img/news/<?= $news['img_news'] ?>" class="float-left mr-3 about-img">
                            <h3 class="card-title"> <?= $news['title'] ?> </h3>
                            <p class="card-text"><?= $news['content'] ?></p>
                            <div class="card-link">Источник:
                                <a href="<?= $news['link_content'] ?>" target="_blank"><?= $news['id_author'] ?></a>
                            </div>
                            <span><?= $news['pub_date'] ?></span>
                        </div>
                    </div>
                    <?php
                }
            }
        }
        ?>
    </div>
</section>