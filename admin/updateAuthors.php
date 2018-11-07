<?php session_start(); ?>
<!--РЕДАКТИРОВАНИЕ АВТОРА-->
<?php require_once "db.php"; ?>

<?php include "header.php"; ?>

    <form action="" method="post" class="container form-horizontal" role="form">
        <?php
        /*если существует GET запрос с ID*/
        if (isset($_GET['id'])) {
        //создаем переменную для присваивания ей номера ID из GET запроса
        $authorID = $_GET['id'];
        $select_author = "SELECT id, name_author, link_author FROM author WHERE id=$authorID";
        //передаем 2 параметра: подключение из db.php и $select_author
        $res_select = mysqli_query($con, $select_author);
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
                    <td>
                        <input name="name_author" type="text" value="<?= $author['name_author'] ?>"></td>

                    <td><input name = "link_author" type="text" value="<?= $author['link_author'] ?>"></td>
                    <td>
                        <input name="updateAuthor" type="submit" formaction="update_report.php?id=<?= $author['id'] ?>"
                               value="Изменить"
                               class="btn btn-success btn-block">
                    </td>
                </tr>
                </tbody>
                <?php
                }
                }
                ?>

            </table>
        </div>
    </form> <!-- /form -->
    <a class="btn btn-success btn-block" href="update_authors.php">Вернуться назад</a>

<?php include "footer.php"; ?>