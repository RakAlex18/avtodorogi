<?php session_start(); ?>

<?php require_once "../db.php"; ?>

<?php include "function.php"; ?>
<?php include "header.php"; ?>
<?php updateNews();?>

    <form action="update_news.php" method="post" class="container form-horizontal" role="form">
        <?php
        $select_news = "SELECT id, title, content, id_author, pub_date, link_content FROM news";
        //передаем 2 параметра: подключение из db.php и $select_news
        $res_select = mysqli_query($con, $select_news);
        //проверка на наличие ошибок
        if (!$res_select) {
        echo mysqli_error($con);
        }
        while ($last_news = mysqli_fetch_assoc($res_select)) {
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
        <div class="row justify-content-center">
            <div class="col-auto">
                <input type="submit" class="btn btn-primary btn-block" value="Создать новость">
            </div>
        </div>
    </form> <!-- /form -->
    <a href="index.php">Вернуться назад</a>

<?php include "footer.php"; ?>

