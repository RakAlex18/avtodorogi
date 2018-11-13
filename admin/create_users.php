<?php session_start(); ?>
<!--СОЗДАНИЕ НОВОСТИ-->
<?php require_once "db.php"; ?>

<?php include "function.php"; ?>
<?php include "header.php"; ?>
<?php createUsers(); ?>
<div class=" registrUser">
    <form action="create_users.php" method="post" class="container form-horizontal" role="form">
        <div class="form-row">
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="firstName" class="col-sm-12 control-label sr-only">Имя</label>

                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Имя
                        </div>
                    </div>
                    <input type="text" name="firstName" id="firstName" placeholder="Имя" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group col-md-6 mt-md-3">
                <label for="lastName" class="col-sm-12 control-label sr-only">Фамилия</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Фамилия
                        </div>
                    </div>
                    <input type="text" name="lastName" id="lastName" placeholder="Фамилия" class="form-control"
                           autofocus>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="login" class="col-sm-5 control-label sr-only">Логин</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-bed"></i>
                        </div>
                    </div>
                    <input type="text" name="login" id="login" placeholder="Логин (не менее 3 символов)"
                           class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="col-sm-3 control-label sr-only">Email </label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-at"></i>
                        </div>
                    </div>

                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" name="email">

                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label for="password" class="col-sm-5 control-label sr-only">Пароль</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-unlock-alt"></i>
                        </div>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Пароль" class="form-control">
                </div>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="user_role" class="col-sm-5 control-label sr-only">Роль</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-unlock"></i>
                        </div>
                    </div>
                    <input type="text" name="user_role" id="user_role" placeholder="Роль пользователя"
                           class="form-control">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-birthday-cake"></i>
                        </div>
                    </div>
                    <input type="date" name="birthDate" id="birthDate" class="form-control">
                </div>
                <label for="birthDate" class="col-sm-5 control-label sr-only">День Рождения</label>

            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="phoneNumber" class="col-sm-5 control-label sr-only">Номер телефона Viber </label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-phone-square"></i>
                        </div>
                    </div>
                    <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Номер телефона - Viber"
                           class="form-control">
                </div>
            </div>
        </div> <!-- /.form-group -->
        <div class="row justify-content-center">
            <div class="col-auto">
                <button type="submit" name="registrUser" class="btn btn-primary btn-block mb-3">Создать</button>
            </div>
        </div>
    </form
    <br>
    <a class="btn btn-success btn-block" href="index.php">Вернуться назад</a>
</div>
<?php include "footer.php"; ?>

