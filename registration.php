<?php session_start(); ?>
<?php require_once "classes/User.php"; ?>
<?php require_once "classes/Registration.php";?>
<?php require_once "classes/Password.php";?>
<?php require_once "classes/Database.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/nav_top.php"; ?>


<?php
$db = new Database('localhost', 'root', '', 'avtodorogi');
$form = new Registration($_POST);
/*Делаем переменные доступными для чтения*/
$firstName = $db->escape($form->getFirstName());
$lastName = $db->escape( $form->getLastName());
$login =  $db->escape($form->getLogin());
$email = $db->escape($form->getEmail());
$birthDate = $db->escape($form->getBirthDate());
$password = new Password($db->escape($form->getPassword()));
$phoneNumber = $db->escape($form->getPhoneNumber());
//$user_role =  $form->getUserRole();
if ($_POST) {
    if ($form->validate()) {
       // var_dump($_POST);
   //   echo $login; выводит логин
        $res=$db->selectAll("SELECT * FROM users WHERE login = '$login'");
//var_dump($res);//строку с логином находит
//die();
        if ($res){
           echo  $msg = "Пользователь с таким логином уже существует";
        } else{
            $db->selectAll("INSERT INTO users (firstName, lastName, login, email, birthDate, password, phoneNumber) VALUES ('{$firstName}','{$lastName}' ,'{$login}','{$email}','{$birthDate}' , '{$password}', '{$phoneNumber} ')");
           // echo "Регистрация прошла  успешно!";
            header("Location: index.php?msg=Регистрация успешна");
        }
    } else {
        echo $form->passwordMatch() ? 'Не все поля заполнены' : 'Пароли не совпадают';
    }
}
?>
<!--форма регистрации-->
<div class=" registrUser">
    <form action="" method="post" class="container form-horizontal" role="form">
        <div class="form-row">
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="firstName" class="col-sm-12 control-label sr-only">Ваше Имя</label>

                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Имя
                        </div>
                    </div>
                    <input type="text" name="firstName" id="firstName" placeholder="Ваше Имя" class="form-control"
                           autofocus>
                </div>
            </div>
            <div class="form-group col-md-6 mt-md-3">
                <label for="lastName" class="col-sm-12 control-label sr-only">Ваша Фамилия</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            Фамилия
                        </div>
                    </div>
                    <input type="text" name="lastName" id="lastName" placeholder="Ваша Фамилия" class="form-control"
                           autofocus>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="login" class="col-sm-5 control-label sr-only">Ваш логин</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-bed"></i>
                        </div>
                    </div>
                    <input type="text" name="login" id="login" placeholder="Придумайте логин (не менее 3 символов)"
                           class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="col-sm-3 control-label sr-only">Email* </label>
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
                <label for="password" class="col-sm-5 control-label sr-only">Введите пароль*</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-unlock-alt"></i>
                        </div>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Введите пароль"
                           class="form-control">
                </div>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <label for="password" class="col-sm-5 control-label sr-only">Повторите пароль*</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-unlock"></i>
                        </div>
                    </div>
                    <input type="password" name="confirm_password" id="password" placeholder="Повторите пароль"
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
                <button type="submit" name="registr" class="btn btn-primary btn-block mb-3">Зарегистрироваться</button>

            </div>
        </div>

    </form> <!-- /form -->
</div>
<?php include "includes/footer.php"; ?>
