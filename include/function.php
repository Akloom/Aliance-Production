<?php
include "config.php";

// Консультация

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
      $sql = "INSERT INTO `consultation` (name, phone) VALUES (:nameModal, :phoneModal)";
      $query = $connect->prepare($sql);
      $result = $query->execute([
        ':nameModal' => $_POST['name-modal'],
        ':phoneModal' => $_POST['phone-modal'],
      ]);
    }
  }
}

// Сотрудничество

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
      $sql2 = "INSERT INTO `cooperation` (name, phone) VALUES (:name, :phone)";
      $query2 = $connect->prepare($sql2);
      $result2 = $query2->execute([
        ':name' => $_POST['name'],
        ':phone' => $_POST['phone'],
      ]);
    }
  }
}

// Данные из БД

$sql = $connect->prepare("SELECT * FROM `consultation` WHERE `flag` = 0");
$sql->execute();

$result_sql = $sql->fetchAll(PDO::FETCH_OBJ);

// Данные из БД 2

$sql2 = $connect->prepare("SELECT * FROM `cooperation` WHERE `flag` = 0");
$sql2->execute();

$result_sql2 = $sql2->fetchAll(PDO::FETCH_OBJ);

// Удалить

if (isset($_POST['delete'])) {
  $sql = "DELETE FROM `consultation` WHERE `id` = :id";
  $query = $connect->prepare($sql);
  $result = $query->execute([
    ':id' => $_GET['id'],
  ]);
}

// Удалить 2

if (isset($_POST['delete2'])) {
  $sql2 = "UPDATE `consultation` SET `flag` = 1 WHERE `id` = :id;";
  $query2 = $connect->prepare($sql2);
  $result2 = $query2->execute([
    ':id' => $_GET['id'],
  ]);
}