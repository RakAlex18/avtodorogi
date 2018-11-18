<?php session_start(); ?>
<?php if (!empty($_SESSION['auth'])) {
    ?>
    <!--УДАЛЕНИЕ ВЫБРАННОГО АВТОРА-->
    <?php require_once "db.php"; ?>

    <?php include "header.php"; ?>


    <form action="" method="post" class="container form-horizontal" role="form">
        <?php
        /*если существует GET запрос с id_authors*/
        if (isset($_GET['id_authors'])) {
        //создаем переменную для присваивания ей номера ID из GET запроса
        $authorID = $_GET['id_authors'];
        $select_author = "SELECT id_authors, name_author,link_author FROM author WHERE id_authors=$authorID";
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
                    <td><?= $author['id_authors'] ?></td>
                    <td><?= $author['name_author'] ?></td>
                    <td><?= $author['link_author'] ?></td>
                    <td>
                        <input name="deleteAuthor" type="submit" value="Удалить"
                               onclick="return confirm('Действительно удалить этого автора?');"
                               formaction="delete_report.php?id_authors=<?= $author['id_authors'] ?>"
                               class="btn btn-warning btn-block">
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
    <a class="btn btn-success btn-block" href="update_news.php">Вернуться назад</a>


    <?php include "footer.php"; ?>
    <?php
} else {
    header("Location:/index.php", TRUE);
} ?>
