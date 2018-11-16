<?php session_start(); ?>

<?php require_once "db.php"; ?>
<?php include "function.php"; ?>
<?php include "header.php"; ?>
<?php updateNews(); ?>
<?php updateAuthors(); ?>
<?php updateUsers(); ?>



<?php include "footer.php"; ?>

