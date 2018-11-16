<?php session_start(); ?>
<?php if(!empty($_SESSION['auth'])) {
?>
<!--УДАЛЕНИЕ ВЫБРАННОЙ НОВОСТИ-->
<?php require_once "db.php"; ?>

<?php include "header.php"; ?>


<form action="" method="post" class="container form-horizontal" role="form">
    <?php
    /*если существует GET запрос с ID*/
    if (isset($_GET['id'])) {
    //создаем переменную для присваивания ей номера ID из GET запроса
    $usersID = $_GET['id'];
    $select_user = "SELECT * FROM users WHERE id=$usersID";
    //передаем 2 параметра: подключение из db.php и $select_news
    $res_select = mysqli_query($con, $select_user);
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
                </th>
                <th class="th-sm">firstName
                </th>
                <th class="th-sm">lastName
                </th>
                <th class="th-sm">login
                </th>
                <th class="th-sm">email
                </th>
                <th class="th-sm">birthDate
                </th>
                <th class="th-sm">password
                </th>
                <th class="th-sm">phoneNumber
                </th>
                <th class="th-sm">registr_date
                </th>
                <th class="th-sm">user_role
                </th>
                <th class="th-sm">Button
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($users = mysqli_fetch_assoc($res_select)) {
            ?>
            <tr>
                <td><?= $users['id'] ?></td>
                <td><?= $users['firstName'] ?></td>
                <td><?= $users['lastName'] ?></td>
                <td><?= $users['login'] ?></td>
                <td><?= $users['email'] ?></td>
                <td><?= $users['birthDate'] ?></td>
                <td><?= $users['password'] ?></td>
                <td><?= $users['phoneNumber'] ?></td>
                <td><?= $users['registr_date'] ?></td>
                <td><?= $users['user_role'] ?></td>
                <td>

                    <input name="deleteUser" type="submit" value="Удалить" onclick="return confirm('Действительно удалить этого пользователя?');"
                           formaction="delete_report.php?id=<?= $users['id'] ?>"
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
<a class="btn btn-success btn-block" href="update_users.php?page=1">Вернуться назад</a>


<?php include "footer.php"; ?>
    <?php
}
else {
    header("Location:/index.php", TRUE);
} ?>
