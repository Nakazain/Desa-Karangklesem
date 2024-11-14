function animateOnScroll() {
  const fadeElements = document.querySelectorAll('.fade');
  const fadeZoomElements = document.querySelectorAll('.fadeZoom');
  const fadeZoomUpElements = document.querySelectorAll('.fadeDown');
  const fadeRightElements = document.querySelectorAll('.fadeRight');
  const fadeDownElements = document.querySelectorAll('.fadeZoomUp');
  const fadeInUpElements = document.querySelectorAll('.fadeUp');

  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('active');
              observer.unobserve(entry.target);
          }
      });
  }, {
      threshold: 0.2
  });

  fadeElements.forEach(el => observer.observe(el));
  fadeZoomElements.forEach(el => observer.observe(el));
  fadeDownElements.forEach(el => observer.observe(el));
  fadeRightElements.forEach(el => observer.observe(el));
  fadeZoomUpElements.forEach(el => observer.observe(el));
  fadeInUpElements.forEach(el => observer.observe(el));
}

document.addEventListener('DOMContentLoaded', animateOnScroll);

let currentIndex = 0;
const carousel = document.getElementById('carousel');
const slides = document.querySelectorAll('.carousel-item');

function updateCarousel() {
  const width = slides[0].clientWidth;
  carousel.style.transform = `translateX(-${currentIndex * width}px)`;
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % slides.length;
  updateCarousel();
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + slides.length) % slides.length;
  updateCarousel();
}
window.addEventListener('resize', updateCarousel);

document.querySelectorAll('.scroll-link').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      const target = document.querySelector(this.getAttribute('href'));

      target.scrollIntoView({
          behavior: 'smooth'
      });
  });
});