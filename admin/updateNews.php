<?php session_start(); ?>

<?php require_once "../db.php"; ?>

<?php include "function.php"; ?>
<?php include "header.php"; ?>
<?php //updateNews(); ?>

<form action="" method="post" class="container form-horizontal" role="form">
    <?php
    $select_news = "SELECT id, title, content, id_author, pub_date, link_content FROM news";
    //передаем 2 параметра: подключение из db.php и $select_news
    $res_select = mysqli_query($con, $select_news);
    //проверка на наличие ошибок
    if (!$res_select) {
        echo mysqli_error($con);
    }
    ?>
    <div class="row">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-hover" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">ID
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Title
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Content
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
                <td><?= $last_news['title'] ?></td>
                <td><?= $last_news['content'] ?></td>
                <td><?= $last_news['id_author'] ?></td>
                <td><?= $last_news['pub_date'] ?></td>
                <td><?= $last_news['link_content'] ?></td>
                <td>
                    <input name = "update" type="submit" formaction="updateNews.php" value="Редактировать" class="btn btn-success btn-block">
                </td>
            </tr>
            </tbody>
            <?php
            }
            ?>
            <tfoot>
            <tr>
                <th>ID
                </th>
                <th>Title
                </th>
                <th>Content
                </th>
                <th>ID_author
                </th>
                <th>Pub_date
                </th>
                <th>Link_content
                </th>
                <th>Button
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
</form> <!-- /form -->
<a href="index.php">Вернуться назад</a>

<?php include "footer.php"; ?>

