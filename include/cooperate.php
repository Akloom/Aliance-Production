<section class="cooperate" data-aos="fade-up">
  <div class="cooperate-image">
    <img src="../assets/img/image/cooperate-image.png" alt="cooperate">
  </div>
  <div class="cooperate-content">
    <div class="cooperate-content__desc">
      <h1>Хотите сотрудничать?</h1>
      <p> Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
    </div>
    <form action="/" method="post" class="cooperate-content__form">
      <div class="cooperate-content__form-inputs">
        <div class="cooperate-content__form-inputs__item">
          <input type="text" name="name" placeholder="Ваше имя">
          <small class="cooperate-content__form-inputs__item-error"> <?= $errMessageName; ?> </small>
        </div>
        <div class="cooperate-content__form-inputs__item">
          <input type="text" name="phone" placeholder="Ваш номер телефона">
          <small class="cooperate-content__form-inputs__item-error"> <?= $errMessagePhone; ?> </small>
        </div>
      </div>
      <div class="cooperate-content__form-send">
        <button type="submit" name="send" class="cooperate-content__form-send__btn">Отправить заявку</button>
        <p>
          <img src="../assets/img/icons/shield-icon.svg" alt="">
          Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
        </p>
      </div>
    </form>
  </div>
</section>