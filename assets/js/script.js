// Появление модального окна

let modal = document.getElementById("myModal");
let btn = document.getElementById("myBtn");
let span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
  modal.style.display = "block";
}

span.onclick = function () {
  modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Гамбургер

let hamburger = document.querySelector('.hamburger-menu');
let navCollapse = document.querySelector('.header-nav__collapse');
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('is-active');
  navCollapse.classList.toggle('is-active');
});

// Swiper номер 1 (benefits)

var swiper1 = new Swiper("#swiper1", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    500: {
      slidesPerView: 2,
    },
    740: {
      slidesPerView: 3,
    },
    970: {
      slidesPerView: 4,
    },
    1250: {
      slidesPerView: 5,
    },
  },
});

// Swiper номер 2 (scheme work)

var swiper2 = new Swiper("#swiper2", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
    
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    700: {
      slidesPerView: 2,
    },
    920: {
      slidesPerView: 3,
    },
    1250: {
      slidesPerView: 4,
    },
  },
});