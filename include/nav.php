  <?php
  include "config.php";
  global $connect;

  $errMessageName = $errMessagePhone = '';

  if (isset($_POST['send'])) {

    if (empty($_POST['name'])) {
      $errMessageName = "Поле не должно быть пустым";
    } else {
      $errMessageName = "";
    }

    if (empty($_POST['phone'])) {
      $errMessagePhone = "Поле не должно быть пустым";
    } else {
      $errMessagePhone = "";
    }

    if ($_POST['name']) {
      $name = $_POST['name'];

      if ($_POST['phone']) {
        $number = $_POST['phone'];

        $add_consultation = "";
        $request_consultation = mysqli_query($connect, $add_consultation);
      }
    }
  }

  ?>

  <!-- Шапка -->

  <header class="header">
    <a href="/" class="header-logo">
      <img src="./assets/img/icons/logo-icon.svg" alt="logo">
    </a>
    <div class="hamburger-menu">
      <span></span>
    </div>
    <div class="header-nav__collapse">

      <!-- Навигация -->

      <div class="header-nav">
        <a href="/about" class="header-nav__link">О компании</a>
        <a href="/contract-product" class="header-nav__link">Контрактное производство</a>
        <a href="/own-product" class="header-nav__link">Собственные торговые марки</a>
        <a href="/news" class="header-nav__link">Новости</a>
        <a href="/contact" class="header-nav__link">Контакты</a>
        <span class="header-nav__line"></span>
      </div>

      <!-- Информация в мобильной версии -->

      <div class="header-nav__info">
        <a href="tel: +7 (499) 686-10-14">+7 (499) 686-10-14</a>
        <div class="header-nav__info-contacts">
          <div class="header-nav__info-contacts__item">
            <svg class="header-nav__info-contacts__item-icon">
              <use href="../assets/img/icons/svg-sprites.svg#nav-icon"></use>
            </svg>
            <p>г. Мосвка, Холодильный пер. 4к1с8</p>
          </div>
          <div class="header-nav__info-contacts__item">
            <svg class="header-nav__info-contacts__item-icon">
              <use href="../assets/img/icons/svg-sprites.svg#mail-icon"></use>
            </svg>
            <a href="mailto: a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
          </div>
        </div>
        <div class="header-nav__info-social">
          <a href="">
            <svg class="header-nav__info-social__icon">
              <use href="../assets/img/icons/svg-sprites.svg#vk-icon"></use>
            </svg>
          </a>
          <a href="">
            <svg class="header-nav__info-social__icon">
              <use href="../assets/img/icons/svg-sprites.svg#inst-icon"></use>
            </svg>
          </a>
        </div>
      </div>

      <!-- Контакты и модальное окно -->

      <div class="header-contact">
        <a href="tel: +7 (499) 686-10-14">
          <svg class="header-contact__icon">
            <use href="../assets/img/icons/svg-sprites.svg#phone-icon"></use>
          </svg>
          <span>+7-(499)-686-10-14</span>
        </a>
        <button id="myBtn">Получить консультацию</button>

        <!-- Модальное окно -->
        <div id="myModal" class="modal">
          <div class="modal-content">
            <div class="modal-content__header">
              <h1>Есть вопросы?</h1>
              <div class="close">
                <span></span>
              </div>
            </div>
            <div class="modal-content__body">
              <p>Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
              <form action="" method="post" class="modal-content__body-form">
                <div class="modal-content__body-form__item">
                  <input type="text" name="name" placeholder="Ваше имя">
                  <?php if ($errMessageName) : ?>
                    <small class="modal-content__body-form__item-error"> <?= $errMessageName; ?> </small>
                  <?php endif; ?>
                </div>
                <div class="modal-content__body-form__item">
                  <input type="text" name="phone" placeholder="Ваш номер телефона">
                  <?php if ($errMessageNumber) : ?>
                    <small class="modal-content__body-form__item-error"> <?= $errMessageName; ?> </small>
                  <?php endif; ?>
                </div>
                <button type="submit" name="send">Отправить заявку</button>
              </form>
            </div>
            <div class="modal-content__footer">
              <img src="../assets/img/icons/shield-icon.svg" alt="">
              <p>Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>