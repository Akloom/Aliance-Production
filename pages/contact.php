<?php
// Название страницы
$web_title = "Контакты";
$page_name = "Контакты";
$before_page_name = "";
$before_page_name_link = "";
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

<!-- Блок: контакты -->

<section class="contact container" data-aos="fade-up">
  <a href="tel:+7 (499) 686-10-14">+7 (499) 686-10-14</a>
  <div class="contact-content">
    <div class="contact-content__contacts">
      <div class="contact-content__contacts-item">
        <svg class="contact-content__contacts-item__icon">
          <use href="../assets/img/icons/svg-sprites.svg#nav-icon"></use>
        </svg>
        <p>г. Москва, Холодильный пер. 4к1с8</p>
      </div>
      <div class="contact-content__contacts-item">
        <svg class="contact-content__contacts-item__icon">
          <use href="../assets/img/icons/svg-sprites.svg#mail-icon"></use>
        </svg>
        <a href="mailto: a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
      </div>
    </div>
    <div class="contact-content__social">
      <a href="#">
        <svg class="contact-content__social-icon">
          <use href="../assets/img/icons/svg-sprites.svg#vk-icon"></use>
        </svg>
      </a>
      <a href="#">
        <svg class="contact-content__social-icon">
          <use href="../assets/img/icons/svg-sprites.svg#inst-icon"></use>
        </svg>
      </a>
    </div>
  </div>
</section>

<!-- Блок: Карта -->

<section class="map container" data-aos="fade-up">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1461.916148502735!2d74.5938693!3d42.8763837!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb7df8c6064d9%3A0x5e0f4e166983dc74!2z0J_RgNC-0YTQtdGB0YHQuNC-0L3QsNC70YzQvdGL0Lkg0LvQuNGG0LXQuSDihJY5OA!5e0!3m2!1sru!2skg!4v1678955953915!5m2!1sru!2skg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<!-- Блок: сотрудничество -->

<?php
include "./include/config.php";

$form_cooperate = "/contact";

$name = $phone = '';
$errMessageName = $errMessagePhone = '';

if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];

  if (empty($name)) {
    $errMessageName = 'Поле не должно быть пустым';
  } else {
    $errMessageName = '';
  }
  if (empty($phone)) {
    $errMessagePhone = 'Поле не должно быть пустым';
  } else {
    $errMessagePhone = '';
  }

  if (!$errMessageName) {

    if (!$errMessagePhone) {
      $sql = "INSERT INTO `cooperation` (name, phone) VALUES ('$name', '$phone')";

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

<?php include "./include/cooperate.php" ?>

<!-- Подвал сайта -->

<?php include "./layout/lower-footer.php" ?>

<!-- Навигация подвала -->

<?php include "./layout/footer-nav.php" ?>

<!-- Авторские права -->

<?php include "./layout/copyright.php" ?>

<?php include "./layout/footer.php" ?>