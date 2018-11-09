<?php session_start(); ?>
<!--РЕДАКТИРОВАНИЕ НОВОСТИ-->
<?php require_once "db.php"; ?>

<?php include "header.php"; ?>

    <form action="" method="post" class="container form-horizontal" role="form">
        <?php
        /*если существует GET запрос с ID*/
        if (isset($_GET['id'])) {
        //создаем переменную для присваивания ей номера ID из GET запроса
        $newsID = $_GET['id'];
        $select_news = "SELECT id, title, content, id_author, pub_date, link_content, img_news FROM news WHERE id=$newsID";
        //передаем 2 параметра: подключение из db.php и $select_news
        $res_select = mysqli_query($con, $select_news);
        //проверка на наличие ошибок
        if (!$res_select) {
            echo mysqli_error($con);
        }
        ?>
        <div class="row">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-hover" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th class="th-sm">ID
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Title
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>

                    <th class="th-sm">ID_author
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Pub_date
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Link_content
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Button
                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($last_news = mysqli_fetch_assoc($res_select)) {
                ?>
                <tr>
                    <td><?= $last_news['id'] ?></td>
                    <td>
                        <input name="title" type="text" value="<?= $last_news['title'] ?>"></td>
                    <td><img src="img/news/<?= $last_news['img_news']  ?>" alt="" width="100">
                        <label for="img_news"> </label>
                        <input type="file" name="img_news" class="form-control">
                    </td>
                    <td><input name = "id_author" type="text" value="<?= $last_news['id_author'] ?>"></td>
                    <td><input name="pub_date" type="text" value="<?= $last_news['pub_date'] ?>"></td>
                    <td><input name="link_content" type="text" value="<?= $last_news['link_content'] ?>"></td>
                    <td>
                        <input name="update" type="submit" formaction="update_report.php?id=<?= $last_news['id'] ?>"
                               value="Изменить"
                               class="btn btn-success btn-block">
                    </td>
                </tr>
                </tbody>


            </table>


        </div>

        <textarea name="content_update" cols="100" rows="20"><?= $last_news['content'] ?></textarea>
                    <img src="img/news/<?= $last_news['img_news']  ?>" alt="">
                        <label for="img_news"> </label>
                        <input type="file" name="img_news" class="form-control">
                    <?php
                }

        }
        ?>
    </form> <!-- /form -->
    <a class="btn btn-success btn-block" href="update_news.php?page=1">Вернуться назад</a>

<?php include "footer.php"; ?>