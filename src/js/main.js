const siteNav = document.querySelector(".js-site-nav");
const menu = document.querySelector(".js-menu");
const menuButton = document.querySelector(".js-menu-button");
const navCurtain = document.querySelector(".js-nav-curtain");
const navLinks = document.querySelector(".site-nav__menu");

function mobileNavToggler() {
  const state = {
    isOpen: false,
  };

  function showMenu() {
    siteNav.classList.add("site-nav--is-open");
    menu.classList.remove("fade-out");
    menu.classList.add("fade-in");
  }

  function hideMenu() {
    siteNav.classList.remove("site-nav--is-open");
    menu.classList.remove("fade-in");
    menu.classList.add("fade-out");
  }

  function curtainUp() {
    navCurtain.classList.remove("curtain-down");
    navCurtain.classList.add("curtain-up");
  }

  function curtainDown() {
    navCurtain.classList.remove("curtain-up");
    navCurtain.classList.add("curtain-down");
  }

  function teste() {}

  function unfocusButton(event) {
    menuButton.classList.remove("menu-button__lines--open");
    menuButton.setAttribute("aria-expanded", "false");
  }

  function focusButton(event) {
    menuButton.classList.add("menu-button__lines--open");
    menuButton.setAttribute("aria-expanded", "true");
  }

  function handleMenuButtonClick() {
    if (state.isOpen) {
      hideMenu();
      unfocusButton();
      curtainDown();
      state.isOpen = false;
      return;
    }

    focusButton();
    curtainUp();
    state.isOpen = true;
  }

  function handleCurtainAnimationEnd() {
    if (state.isOpen) {
      showMenu();
    }
  }

  return {
    handleEvent(event) {
      if (event.type === "click") {
        handleMenuButtonClick();
        return;
      }

      if (event.type === "animationend") {
        handleCurtainAnimationEnd();
      }
    },

    init() {
      navLinks.addEventListener("click", this);
      menuButton.addEventListener("click", this);
      navCurtain.addEventListener("animationend", this);
    },
  };
}

mobileNavToggler().init();

$("#slide-projetos").owlCarousel({
  margin: 15,
  responsiveClass: true,
  autoHeight: true,
  dots: true,
  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    600: {
      items: 3,
      nav: false,
    },
    1000: {
      items: 5,
      nav: true,
      loop: false,
    },
  },
});

$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).width() >= 800) {
      var scroll = $(window).scrollTop();
      if (scroll >= 5) {
        $("nav").addClass("sticky");
      } else if (!scroll) {
        $("nav").removeClass("sticky");
      }
    }
  });
});

var typed = new Typed(".animation-js", {
  strings: ["Olá, me chamo Vinicius", "Entenda um pouco sobre mim"],
  typeSpeed: 60,
  backSpeed: 60,
  loop: true,
});

ScrollReveal({
  reset: true,
  distance: "60px",
  duration: 800,
  delay: 400,
});
ScrollReveal().reveal(".content-about", {
  origin: "top",
});
ScrollReveal().reveal("#slide-projetos", {
  origin: "left",
});
ScrollReveal().reveal(".conf-grid", {
  origin: "left",
});
ScrollReveal().reveal(".lottie-player", {
  origin: "left",
});
ScrollReveal().reveal(".conf-forms", {
  origin: "right",
});


