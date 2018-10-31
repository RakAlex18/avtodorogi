<?php session_start(); ?>
<?php require_once "db.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/nav_top.php"; ?>

<!--НОВОСТИ-->
<section id="news" class="container news">
    <div class="row">
        <?php
        /*если существует GET запрос с ID*/
        if (isset($_GET['id'])) {
            //создаем переменную для присваивания ей номера ID из GET запроса
            $newsID = $_GET['id'];
            //через * вытаскиваем все данные из моей таблицы news с нужным ID
            $sql = "SELECT id, title, content, id_author, pub_date, link_content FROM news WHERE id=$newsID";
            //передаем 2 параметра: подключение из db.php и $sql
            $result = mysqli_query($con, $sql);
            //проверка на наличие ошибок
            if (!$result) {
                echo mysqli_error($con);
            }
            while ($page = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-12">
                    <div class="card-body text-center">
                        <h3 class="card-title"> <?= $page['title'] ?> </h3>
                        <p class="card-text"><?= $page['content'] ?></p>
                        <div class="card-link">Источник:
                            <a href="<?= $page['link_content'] ?>" target="_blank"><?= $page['id_author'] ?></a>
                        </div>
                        <span><?= $page['pub_date'] ?></span>
                    </div>
                </div>
                <?php
            }
        } else {
            $newsID = -1;
        }
        ?>
        <!--ПОКАЗЫВАЕМ  ОСТАЛЬНЫЕ НОВОСТИ - 9 штук последних-->
        <?php
        /*через * вытаскиваем все данные из моей таблицы news со следующей
         сортировкой: все id, кроме текущего $newsID,
         по убыванию ORDER BY id DESC с лимитом в 9 строк*/
        $sql2 = "SELECT id, title, CONCAT(LEFT (content, 500), '...') as content, id_author, pub_date, link_content FROM news WHERE id>0 AND id!=$newsID ORDER BY id DESC LIMIT 9";
        //передаем 2 параметра: подключение из db.php и $sql2
        $result2 = mysqli_query($con, $sql2);
        //проверка на наличие ошибок
        if (!$result2) {
            echo mysqli_error($con);
        }
        while ($last_news = mysqli_fetch_assoc($result2)) {
            ?>
            <div class="col-md-4">
                <div class="card-body text-center" style="min-height: 0; border-top: 1px solid #ef6c00">
                    <!--  делаем ссылку по id новости-->
                    <a href="/news.php?id=<?= $last_news['id'] ?>">
                        <h3 class="card-title"> <?= $last_news['title'] ?> </h3>
                    </a>
                    <p class="card-text"><?= $last_news['content'] ?></p>
                    <div class="card-link">Источник:
                        <a href="<?= $last_news['link_content'] ?>" target="_blank"><?= $last_news['id_author'] ?></a>
                    </div>
                    <span><?= $last_news['pub_date'] ?></span>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<?php include "includes/footer.php"; ?>

