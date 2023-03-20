<?php
// Название страницы
$web_title = "Страница Админа"
?>

<?php include "./layout/header.php" ?>

<!-- Баннер -->

<section class="greetings">
  <div class="greetings-content">
    <h1>Доброго времени суток админ!</h1>
    <p>Желаю хорошего времяпровождения в работе!</p>
    <div class="greetings-direct">
      <span>Куда хотите отправиться?</span>
      <div class="greetings-direct__links">
        <a href="/applications">Заявки</a>
        <a href="/blog-admin">Блог</a>
      </div>
    </div>
  </div>
</section>

<?php include "./layout/footer.php" ?>