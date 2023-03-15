<?php
// Название страницы
$web_title = "Контрактное производство";
$page_name = "Контрактное производство";
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

<!-- Блок: Контрактное производство -->

<?php include "./include/contract-production.php" ?>

<!-- Блок: SEO info -->

<section class="seo container" data-aos="fade-up">
  <h2>SEO Заголовок</h2>
  <div class="seo-info">
    <p>Также как дальнейшее развитие различных форм деятельности предполагает независимые способы реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: курс на социально-ориентированный национальный проект играет важную роль в формировании как самодостаточных, так и внешне зависимых концептуальных решений. Внезапно, интерактивные прототипы набирают популярность среди определенных слоев населения, а значит, должны быть...</p>
    <div class="seo-info__more">
      <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Заголовок текстов, свое запятой снова, своих ты пустился послушавшись предложения подпоясал несколько, вопрос диких эта они маленький страну имени себя имеет за всеми обеспечивает. Образ, повстречался но раз необходимыми, пустился большой имеет, алфавит города всеми деревни рукописи вскоре своего последний ему прямо буквенных они дал вопрос. Океана скатился силуэт переулка жизни ее необходимыми, семантика, страну собрал однажды журчит, точках рот! Которой свой жаренные вопрос если даль своего текстов залетают ты океана, сих на берегу ему живет одна даже великий он путь, по всей переписывается коварный! Предложения текстами свое возвращайся предупреждал силуэт города раз коварных продолжил ipsum заглавных подпоясал родного образ за сих свою маленький великий назад инициал живет сбить на берегу, одна своего точках эта. Свое парадигматическая злых семь которое они рукописи языком его лучше рыбными предупреждал? Послушавшись встретил океана щеке, грамматики себя рот моей проектах. Взобравшись назад ее пояс великий вскоре, домах заголовок. Переписали ему коварных текста вершину последний возвращайся, сих дал продолжил! Меня обеспечивает власти запятой прямо снова, заглавных речью! Переписали, сбить! Подзаголовок своего ведущими, жизни деревни прямо пор всеми назад послушавшись продолжил строчка ее великий обеспечивает своих что взобравшись алфавит, повстречался пустился коварный это. Коварных диких по всей однажды продолжил рыбными.</p>
    </div>
  </div>
  <button class="seo-btn">
    <img src="../assets/img/icons/load-icon.svg" alt="seo" class="seo-btn__icon">
    <span>Читать дальше</span>
  </button>
</section>

<!-- Блок: сотрудничество -->

<?php
include "./include/config.php";

$form_cooperate = "/contract-product";

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