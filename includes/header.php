<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700i,900&amp;subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/libs.min.css"> <!-- Подключаем CSS -->
    <link rel="stylesheet" href="css/main.css"> <!-- Подключаем CSS -->
    <link rel="stylesheet" href="fontawesome-free-5.4.1-web/css/all.css"/> <!-- Подключаем иконки -->
</head>
<body>
<header id='header' class='header'>
    <div class="container-fluid">
        <div class="row justify-content-sm-between justify-content-center align-items-center">
            <div class="col-lg-3 col-sm-5 col-auto">
                <img src="img/Logo_1.png" alt="logo" class="logo">
            </div>
            <div class="col-lg-4 col-sm-4 description text-center">
                - всё про содержание, ремонт и строительство автомобильных дорог
            </div>

            <div class="col-lg-3 col-sm-3 offset-lg-2 col-auto">


                <ul class="nav registr">
                    <li class="nav-item registr__item">
                        <a class="nav-link active" href="registration.php">Регистрация</a>
                    </li>
                    <li class="nav-item registr__item">
                         <!-- КНОПКА ВОЙТИ -> Button trigger modal -->

                        <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-sm">
                            Войти
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- МОДАЛЬНОЕ ОКНО -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
                    <form action="../login.php" method="post" class="form-horizontal mt-3" role="form">
						<div class="form-group">
							<label for="login" class= "col-auto control-label sr-only">Ваш логин</label>
							<div class="col-auto input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                    <i class="fas fa-bed"></i>
                        </div>
                    </div>
								<input type="text" name="login" id="login" placeholder="Введите логин" class="form-control" autofocus>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-auto control-label sr-only">Пароль</label>
							<div class="col-auto input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                    <i class="fas fa-unlock-alt"></i>
                        </div>
                    </div>
								<input type="password" name="password" id="password" placeholder="Введите пароль" class="form-control">
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-block">Войти</button>
						<button type="submit" class="btn btn-primary btn-block" name = "admin">
                           Войти администратором
                        </button>
					</form> <!-- /form -->
        </div>
    </div>
</div>