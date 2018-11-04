<?php session_start(); ?>
<!--СОЗДАНИЕ НОВОСТИ-->
<?php require_once "../db.php"; ?>

<?php include "function.php"; ?>
<?php include "header.php"; ?>
<?php createNews(); ?>
<div class=" registrUser">
    <form action="create_news.php" method="post" class="container form-horizontal" role="form">
        <div class="form-row">
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="title" class="col-sm-12 control-label sr-only">title</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            TITLE
                        </div>
                    </div>
                    <input type="text" name="title" id="title" placeholder="название новости" class="form-control"
                           autofocus>
                </div>
            </div>
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="content" class="col-sm-12 control-label sr-only">content</label>

                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            CONTENT
                        </div>
                    </div>
                    <!-- <input type="text" name="conent" id="content" placeholder="содержание новости" class="form-control"
                            autofocus>-->
                    <textarea name="content" id="" cols="" rows="" placeholder="содержание новости" class="form-control"
                              autofocus></textarea>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="link_content" class="col-sm-5 control-label sr-only">Ссылка на источник</label>
                <div class="col-sm-9 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            link_content
                        </div>
                    </div>
                    <input type="text" name="link_content" id="link_content" placeholder="Ссылка на источник"
                           class="form-control"
                           autofocus>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <input type="submit" class="btn btn-primary btn-block" value="Создать новость">
            </div>
        </div>
    </form> <!-- /form -->
<br>
    <a class="btn btn-success btn-block" href="index.php">Вернуться назад</a>

</div>
<?php include "footer.php"; ?>

