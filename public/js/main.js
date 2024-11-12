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