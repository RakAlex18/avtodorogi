<?php session_start(); ?>

<?php require_once "classes/Database.php";?>
<?php
$db = new Database('localhost', 'root', '', 'avtodorogi');
$news = $db->selectAll('SELECT * FROM users');
/*echo "<pre>";
print_r($news);
echo "<pre>";*/
?>

<?php include "includes/header.php"; ?>
<?php include "includes/nav_top.php"; ?>
<?php include "includes/slider.php"; ?>
<?php include "includes/congratulations.php"; ?>
<?php include "includes/big_menu.php"; ?>
<?php include "includes/last_news.php"; ?>
<?php include "includes/newsSite.php"; ?>
<?php include "includes/footer.php"; ?>


