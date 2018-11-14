<?php session_start(); ?>

<?php
if (!empty($_SESSION['auth'])) {
    include "header.php";
    include "footer.php";
} else {
    echo "У вас нет прав администратора";
}
?>