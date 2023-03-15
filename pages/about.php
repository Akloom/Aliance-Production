<?php
$web_title = "О компании";
$page_name = "О компании";
?>

<?php include "./layout/header.php" ?>


<!-- Шапка сайта -->

<?php
include "./include/config.php";

$nameModal = $phoneModal = '';
$errMessageNameModal = $errMessagePhoneModal = '';

if (isset($_POST['send-modal'])) {
  $nameModal = $_POST['name-modal'];
  $phoneModal = $_POST['phone-modal'];

  if (empty($nameModal)) {
    $errMessageNameModal = 'Поле не должно быть пустым';
  } else {
    $errMessageNameModal = '';
  }
  if (empty($phoneModal)) {
    $errMessagePhoneModal = 'Поле не должно быть пустым';
  } else {
    $errMessagePhoneModal = '';
  }

  if (!$errMessageNameModal) {

    if (!$errMessagePhoneModal) {
      $sql = "INSERT INTO `consultation` (name, phone) VALUES ('$nameModal', '$phoneModal')";

      if ($connect->query($sql) === TRUE) {
        echo '';
      } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
      }
      $connect->close();
    }
  }
}

?>

<?php include "./include/nav.php" ?>

<!-- Название страницы -->

<?php include "./layout/name-page.php" ?>

<!-- Блок: Эксперты в области производства -->

<section class="experience container" data-aos="fade-up">
  <div class="experience-content">
    <h1>мы - эксперты в области производства химии</h1>
    <p>Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.</p>
  </div>
  <div class="experience-image">
    <img src="../assets/img/image/experience-image.png" alt="experience">
  </div>

  <!-- Компонент: преимущества -->

  <?php include "./layout/benefits.php" ?>
</section>

<!-- Блок: Наше производство -->

<?php include "./include/about-production.php" ?>

<!-- Блок: отношение к делу и клиентам -->

<?php include "./include/attitude.php" ?>

<!-- Блок: аэрозольная продукция -->

<?php include "./include/aerosol.php" ?>

<!-- Блок: сотрудничество -->

<?php include "./include/cooperate.php" ?>

<!-- Подвал сайта -->

<?php include "./layout/lower-footer.php" ?>

<!-- Навигация подвала -->

<?php include "./layout/footer-nav.php" ?>

<!-- Авторские права -->

<?php include "./layout/copyright.php" ?>

<?php include "./layout/footer.php" ?>