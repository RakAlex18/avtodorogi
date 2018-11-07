<?php session_start(); ?>
<!--СОЗДАНИЕ НОВОСТИ-->
<?php require_once "db.php"; ?>

<?php include "function.php"; ?>
<?php include "header.php"; ?>
<?php createAuthor(); ?>
<div>
    <form action="create_author.php" method="post" class="container form-horizontal" role="form">
        <div class="form-row">
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="name_author" class="control-label sr-only">Автор</label>
                <div class="col-12 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            NAME
                        </div>
                    </div>
                    <input type="text" name="name_author" id="name_author" placeholder="автор" class="form-control"
                           autofocus>
                </div>
            </div>
            <div class="form-group col-md-6 mt-3 mb-3">
                <label for="link_author" class="control-label sr-only">Ссылка на автора</label>
                <div class="col-12 input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            link_author
                        </div>
                    </div>
                    <input type="text" name="link_author" id="link_author" placeholder="Ссылка на автора"
                           class="form-control"
                           autofocus>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <input type="submit" name="create_author" class="btn btn-primary btn-block" value="Добавить автора">
            </div>
        </div>
    </form> <!-- /form -->
    <br>
    <a class="btn btn-success btn-block" href="index.php">Вернуться назад</a>

</div>
<?php include "footer.php"; ?>

