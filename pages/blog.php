<?php
// Название страницы
$web_title = "Блог";
$page_name = "Блог";
$before_page_name = "";
$before_page_name_link = "";
?>

<?php

include "./include/function.php";
$form_cooperate = "/blog";

?>

<?php include "./layout/header.php" ?>

<!-- Шапка сайта -->

<?php include "./include/nav.php" ?>

<!-- Название страницы -->

<?php include "./layout/name-page.php" ?>

<!-- Блок: сотрудничество -->

<?php include "./include/cooperate.php" ?>

<!-- Подвал сайта -->

<?php include "./layout/lower-footer.php" ?>

<!-- Навигация подвала -->

<?php include "./layout/footer-nav.php" ?>

<!-- Авторские права -->

<?php include "./layout/copyright.php" ?>

<?php include "./layout/footer.php" ?>