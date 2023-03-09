  <header>
    <div class="hamburger-menu">
      <span></span>
    </div>
    <a href="/">
      <img src="./assets/img/icons/logo-icon.svg" alt="logo">
    </a>
    <div class="header-nav__collapse">
      <div class="header-nav">
        <a href="/about">О компании</a>
        <a href="/contract-product">Контрактное производство</a>
        <a href="/own-product">Собственные торговые марки</a>
        <a href="/news">Новости</a>
        <a href="/contact">Контакты</a>
      </div>
      <div class="header-nav__info">
        <a href="tel: +7 (499) 686-10-14">+7 (499) 686-10-14</a>
        <div class="header-nav__info-contacts">
          <div class="header-nav__info-contacts__item">
            <svg>
              <use href="../assets/img/icons/svg-sprites.svg#nav-icon"></use>
            </svg>
            <p>г. Мосвка, Холодильный пер. 4к1с8</p>
          </div>
          <div class="header-nav__info-contacts__item">
            <svg>
              <use href="../assets/img/icons/svg-sprites.svg#mail-icon"></use>
            </svg>
            <a href="mailto: a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
          </div>
        </div>
        <div class="header-nav__info-social">
          <a href="">
            <svg>
              <use href="../assets/img/icons/svg-sprites.svg#vk-icon"></use>
            </svg>
          </a>
          <a href="">
            <svg>
              <use href="../assets/img/icons/svg-sprites.svg#inst-icon"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="header-contact">
      <a href="" class="header-contact">
        <svg>
          <use href="../assets/img/icons/svg-sprites.svg#phone-icon"></use>
        </svg>
        <a href="tel: +7 (499) 686-10-14">+7 (499) 686-10-14</ф>
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
                  <small class="modal-content__body-form__item-error">Поле не должно быть пустым</small>
                </div>
                <div class="modal-content__body-form__item">
                  <input type="text" name="name" placeholder="Ваш номер телефона">
                  <small class="modal-content__body-form__item-error">Поле не должно быть пустым</small>
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
  </header>