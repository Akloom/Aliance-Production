<?php
  $web_title = "Страница не найдена"
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


<!-- Подвал сайта -->

<?php include "./layout/lower-footer.php" ?>

<!-- Навигация подвала -->

<?php include "./layout/footer-nav.php" ?>

<!-- Авторские права -->

<?php include "./layout/copyright.php" ?>

<?php include "./layout/footer.php" ?>