<?php
// Название страницы
$web_title = "Автомобильная химия";
$before_page_name = "Контрактное производство" . "<span> - </span>";
$before_page_name_link = "/contract-product";
$page_name = "Автомобильная химия";
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

<!-- Блок: автомобильная химия -->

<section class="auto-him container" data-aos="fade-up">
  <div class="auto-him__content">
    <div class="auto-him__info">
      <h1>Контрактное производство автомобильной химии</h1>
      <div class="auto-him__info-desc">
        <p>Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.</p>
        <p>Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.</p>
      </div>
    </div>
    <div class="auto-him__image">
      <img src="../assets/img/image/auto-him-banner.png" alt="auto-him">
    </div>
  </div>

  <?php include './layout/benefits.php' ?>
</section>

<!-- Блок: изготовление химии -->

<section class="manufacturing" data-aos="fade-up">
  <div class="manufacturing-content">
    <h1>Изготовление автохимии</h1>
    <p>Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.</p>
    <div class="manufacturing-content__info">
      <div class="manufacturing-content__info-items">
        <a href="#">
          <img src="../assets/img/icons/him-icon.svg" alt="him">
          <span>Полное описание товаров</span>
        </a>
        <a href="#">
          <img src="../assets/img/icons/car-icon.svg" alt="car">
          <span>Актуальные цены</span>
        </a>
        <a href="#">
          <img src="../assets/img/icons/him-icon.svg" alt="him">
          <span>Полное описание товаров</span>
        </a>
        <a href="#">
          <img src="../assets/img/icons/car-icon.svg" alt="car">
          <span>Актуальные цены</span>
        </a>
      </div>
      <div class="manufacturing-content__info-items">
        <a href="#">
          <img src="../assets/img/icons/brush-icon.svg" alt="brush">
          <span>Лаки и краски</span>
        </a>
        <a href="#">
          <img src="../assets/img/icons/him-icon.svg" alt="him">
          <span>Химические производства</span>
        </a>
        <a href="#">
          <img src="../assets/img/icons/brush-icon.svg" alt="brush">
          <span>Лаки и краски</span>
        </a>
        <a href="#">
          <img src="../assets/img/icons/him-icon.svg" alt="him">
          <span>Химические производства</span>
        </a>
      </div>
    </div>
  </div>
  <div class="manufacturing-image">
    <img src="../assets/img/image/manufactoring-image.png" alt="manufacturing">
  </div>
</section>

<!-- Блок: исследовательский центр -->

<section class="research-center container" data-aos="fade-up">
  <div class="research-center__info">
    <h1>Исследовательский центр Aliance production</h1>
    <div class="research-center__info-desc">
      <p>Явные признаки победы институционализации рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира могут быть ограничены исключительно образом мышления. Лишь независимые государства набирают популярность среди определенных слоев населения, а значит, должны быть указаны как претенденты на роль ключевых факторов. Лишь акционеры крупнейших компаний могут быть призваны к ответу.</p>
      <p>С учётом сложившейся международной обстановки, синтетическое тестирование требует определения и уточнения анализа существующих паттернов поведения. Не следует, однако, забывать, что высокотехнологичная концепция общественного уклада представляет собой интересный эксперимент проверки как самодостаточных, так и внешне зависимых концептуальных решений. Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление однозначно фиксирует необходимость стандартных подходов.</p>
    </div>
  </div>

  <?php include "./layout/blog-swiper.php" ?>
</section>

<!-- Блок: Схема работы -->

<?php include "./layout/scheme-work.php" ?>

<!-- Блок: аэрозольная продукция -->

<?php include "./include/aerosol.php" ?>

<!-- Блок: сотрудничество -->

<?php
include "./include/config.php";

$form_cooperate = "/autohim-product";

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