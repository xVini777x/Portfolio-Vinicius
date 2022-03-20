var menuBtn = document.getElementById("menuBtn");
var menuMobile = document.getElementById("menuMobile");

menuMobile.style.right = "-450px";
menuBtn.onclick = function () {
  if (menuMobile.style.right === "-450px") {
    menuMobile.style.right = "0";
  } else {
    menuMobile.style.right = "-450px";
  }
};

$("#slide-projetos").owlCarousel({
  margin: 5,
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
