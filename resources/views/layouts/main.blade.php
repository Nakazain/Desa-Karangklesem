<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ $title ?? 'Karangklesem' }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body class="font-poppins antialiased">
  <div class="min-h-screen bg-gray-100">

    @include('layouts.nav-user')
    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset


    <main>
      <div class="container mx-auto p-4 lg:px-48">
        {{ $slot }}
      </div>
    </main>
    <footer>
      <!-- Footer -->
    </footer>
  </div>

  <script>
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
  </script>
</body>
</html>
