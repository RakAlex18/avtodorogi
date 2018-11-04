<?php session_start(); ?>

<?php require_once "../db.php"; ?>
<?php include "function.php"; ?>
<?php include "header.php"; ?>
<?php updateNews(); ?>
<br>
<a class="btn btn-success btn-block" href="update_news.php">Вернуться назад</a>

<?php include "footer.php"; ?>

