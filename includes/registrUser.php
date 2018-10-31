<!-- ФОРМА РЕГИСТРАЦИИ -->
<div class=" registrUser">

    <form action="includes/validation.php" method="post" class="container form-horizontal" role="form">
        <div class="form-row">
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="firstName" class="col-sm-12 control-label sr-only">Ваше Имя</label>

                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                           Имя
                        </div>
                    </div>
                    <input type="text" name="firstName" id="firstName" placeholder="Ваше Имя" class="form-control" autofocus>
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
                    <input type="text" name="lastName" id="lastName" placeholder="Ваша Фамилия" class="form-control" autofocus>
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
                    <input type="text" name="login" id="login" placeholder="Придумайте логин (не менее 3 символов)" class="form-control" autofocus>
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

                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" name= "email">

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
                    <input type="password" name="password" id="password" placeholder="Введите пароль" class="form-control">
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
                    <input type="password" name="passwordDouble" id="password" placeholder="Повторите пароль" class="form-control">
                </div>
            </div>
            </div>
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-4">
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
            <div class="form-group col-sm-12 col-md-5">
                <label for="phoneNumber" class="col-sm-5 control-label sr-only">Номер телефона Viber </label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                    <i class="fas fa-phone-square"></i>
                        </div>
                    </div>
                    <input type="phoneNumber" name="phoneNumber" id="phoneNumber" placeholder="Номер телефона - Viber" class="form-control">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0">Ваш пол</legend>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                <i class="fas fa-male"></i>
                                муж
                            </label>
                        </div>
                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">

                                <i class="fas fa-female"></i>
                                жен
                            </label>
                        </div>

                    </div>
                </div>
            </fieldset>

          </div> <!-- /.form-group -->
<div class = "row justify-content-center">
            <div class = "col-auto">
                <button type="submit" class="btn btn-primary btn-block mb-3">Зарегистрироваться</button>
             
			 </div>
			 </div>



    </form> <!-- /form -->

</div>

