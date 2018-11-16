<?php session_start(); ?>
<?php if (!empty($_SESSION['auth'])) {
    ?>
    <!--РЕДАКТИРОВАНИЕ ПОЛЬЗОВАТЕЛЕЙ-->
    <?php require_once "db.php"; ?>

    <?php include "header.php"; ?>

    <form action="" method="post" class="container form-horizontal" role="form">
        <?php
        /*если существует GET запрос с ID*/
        if (isset($_GET['id'])) {
            //создаем переменную для присваивания ей номера ID из GET запроса
            $usersID = $_GET['id'];
            $select_users = "SELECT * FROM users WHERE id=$usersID";
            //передаем 2 параметра: подключение из db.php и $select_news
            $res_select = mysqli_query($con, $select_users);
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
                    <td><input name="firstName" type="text" value="<?= $users['firstName'] ?>"></td>
                    <td><input name="lastName" type="text" value="<?= $users['lastName'] ?>"></td>
                    <td><input name="login" type="text" value="<?= $users['login'] ?>"></td>
                    <td><input name="email" type="text" value="<?= $users['email'] ?>"></td>
                    <td><input name="birthDate" type="text" value="<?= $users['birthDate'] ?>"></td>
                    <td><input name="password" type="text" value="<?= $users['password'] ?>"></td>
                    <td><input name="phoneNumber" type="text" value="<?= $users['phoneNumber'] ?>"></td>
                    <td><input name="registr_date" type="text" value="<?= $users['registr_date'] ?>"></td>
                    <td><input name="user_role" type="text" value="<?= $users['user_role'] ?>"></td>
                    <td>
                        <input name="updateUser" type="submit" formaction="update_report.php?id=<?= $users['id'] ?>"
                               value="Изменить"
                               class="btn btn-success btn-block">
                    </td>
                </tr>
                </tbody>
                </table>
                </div>
                <?php
            }
        }
        ?>
    </form> <!-- /form -->
    <a class="btn btn-success btn-block" href="update_users.php?page=1">Вернуться назад</a>

    <?php include "footer.php"; ?>
    <?php
} else {
    header("Location:/index.php", TRUE);
} ?>
