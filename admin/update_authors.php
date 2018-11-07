<?php session_start(); ?>
<!--ВЫВОД ВСЕХ АВТОРОВ В ТАБЛИЦУ с кнопками РЕДАКТИРОВАТЬ и УДАЛИТЬ-->
<?php require_once "db.php"; ?>

<?php include "header.php"; ?>

<form action="" method="post" class="container form-horizontal" role="form">
    <?php
    $select_author = "SELECT id, name_author, link_author FROM author WHERE id>0 ORDER BY id DESC LIMIT 15";
    //передаем 2 параметра: подключение из db.php и $select_author
    $res_select = mysqli_query($con, $select_author);
    //проверка на наличие ошибок
    if (!$res_select) {
        echo mysqli_error($con);
    }
    ?>
    <br>
    <a class="btn btn-success btn-block" href="index.php">Вернуться назад</a>
    <br>
    <div class="row">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm table-hover" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th class="th-sm">ID
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Name_author
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Link_author
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>
                <th class="th-sm">Button
                    <i class="fa fa-sort float-right" aria-hidden="true"></i>
                </th>

            </tr>
            </thead>
            <tbody>
            <?php
            while ($author = mysqli_fetch_assoc($res_select)) {
            ?>
            <tr>
                <td><?= $author['id'] ?></td>
                <td><?= $author['name_author'] ?></td>
                <td><?= $author['link_author'] ?></td>

                <td>
                    <input name="update_authors" type="submit" formaction="updateAuthors.php?id=<?= $author['id'] ?>" value="Редактировать"
                           class="btn btn-success btn-block">
                    <input type="submit" formaction="deleteAuthors.php?id=<?= $author['id'] ?>" value="Удалить"
                           class="btn btn-warning btn-block">
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
                <th>Name_author
                </th>
                <th>Link_author
                </th>
                <th>Button
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
</form> <!-- /form -->
<a class="btn btn-success btn-block" href="index.php">Вернуться назад</a>

<?php include "footer.php"; ?>

