document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);

  const winUrl = window.location.pathname;
  const mix = document.querySelectorAll(".navbar .mix-diff");
  if (
    winUrl !== "/sumit/mordernaize/" &&
    winUrl !== "/sumit/mordernaize/services" &&
    winUrl !== "/sumit/mordernaize/financial-firms"
  ) {
    mix.forEach((el) => {
      el.classList.add("invert");
    });
  }

  const t = ["Marketing ", "Strategies ", "Creativity ", "Paid Media "];
  let n = 0,
    i = 0,
    o = !1;
  const s = document.getElementById("typewriter");
  !(function e() {
    i < t.length &&
      (o
        ? 0 < n
          ? ((s.innerHTML = t[i].substring(0, n - 1)), n--, setTimeout(e, 20))
          : ((o = !1), ++i < t.length || (i = 0), setTimeout(e, 40))
        : n < t[i].length
        ? ((s.innerHTML += t[i].charAt(n)), n++, setTimeout(e, 40))
        : ((o = !0), setTimeout(e, 1e3)));
  })();

  const scrollButton = document.getElementById("scrollButton");
  const vidSec = document.getElementById("video-section");
  scrollButton.addEventListener("click", function () {
    setTimeout(function () {
      vidSec.scrollIntoView({ behavior: "smooth", block: "start" });
    }, 200);
  });

  gsap.fromTo(
    vidSec,
    {
      transform: "scale(0.5)",
      borderRadius: "50px",
    },
    {
      duration: 10,
      borderRadius: "0px",
      ease: "power1.inOut",
      transform: "scale(1)",
      scrollTrigger: {
        trigger: vidSec,
        start: "2% 90%",
        end: "40% 50%",
        scrub: true,
        markers: false,
      },
    }
  );

  new Swiper("#imgCarousel", {
    spaceBetween: 10,
    slidesPerView: 2,
    loop: !0,
    freeMode: !0,
    autoplay: { delay: 1500, disableOnInteraction: !1 },
    breakpoints: {
      640: { slidesPerView: 2 },
      768: { slidesPerView: 4 },
      1200: { slidesPerView: 6 },
    },
    pagination: { el: ".swiper-pagination", clickable: !0 },
  });
});
