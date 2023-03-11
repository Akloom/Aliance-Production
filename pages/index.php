<?php
// Название страницы
$web_title = "Главная"
?>

<?php include "./layout/header.php" ?>
<?php include "./include/nav.php" ?>

<section class="banner">
  <div class="banner-content container">
    <div class="banner-content__desc">
      <h1>Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
      <p>Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.</p>
      <a href="/about">Подробнее о компании</a>
    </div>

    <!-- Изменённый swiper -->

    <div class="swiper-container" id="swiper1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="main-swiper__item">
            <svg class="main-swiper__item-icon">
              <use href="../assets/img/icons/svg-sprites.svg#hourglass-icon"></use>
            </svg>
            <p class="main-swiper__item-desc__white">Непрерывная работа c 2017 года</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-swiper__item">
            <svg class="main-swiper__item-icon">
              <use href="../assets/img/icons/svg-sprites.svg#certificate-icon"></use>
            </svg>
            <p class="main-swiper__item-desc__white">Вся продукция сертифицирована</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-swiper__item">
            <svg class="main-swiper__item-icon">
              <use href="../assets/img/icons/svg-sprites.svg#builder-icon"></use>
            </svg>
            <p class="main-swiper__item-desc__white">Контроль качества на всех этапах</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-swiper__item">
            <svg class="main-swiper__item-icon">
              <use href="../assets/img/icons/svg-sprites.svg#truck-icon"></use>
            </svg>
            <p class="main-swiper__item-desc__white">Возможны поставки по всей России</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="main-swiper__item">
            <svg class="main-swiper__item-icon">
              <use href="../assets/img/icons/svg-sprites.svg#speed-icon"></use>
            </svg>
            <p class="main-swiper__item-desc__white">Оперативное производство</p>
          </div>
        </div>
      </div>
      <div class="main-swiper__buttons">
        <button class="swiper-button-next main-swiper__buttons-btn">
          <svg class="main-swiper__icon">
            <use href="../assets/img/icons/svg-sprites.svg#r-arrow-icon"></use>
          </svg>
        </button>
        <button class="swiper-button-prev main-swiper__buttons-btn">
          <svg class="main-swiper__icon">
            <use href="../assets/img/icons/svg-sprites.svg#l-arrow-icon"></use>
          </svg>
        </button>
      </div>
    </div>
</section>

<!-- Блок: Схема работы -->

<?php include "./layout/scheme-work.php" ?>

<!-- Блок: Контрактное производство -->

<section class="contract-production container">
  <h1>Контрактное производство</h1>
  <?php include "./include/contract-production.php" ?>
</section>

<section class="trade-marks container">
  <h1>Собственные торговые марки</h1>
  <?php include "./include/trade-marks.php" ?>
</section>

<?php include "./layout/footer.php" ?>