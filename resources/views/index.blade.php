<x-main-layout title="Beranda">
  {{-- <div class="grid grid-cols-2 gap-6">
  <div class="relative lg:w-[500px] h-[300px] overflow-hidden rounded-lg">
    <div class="flex transition-transform ease-in-out duration-500" id="carousel">
      @foreach ($posts as $item)
      <div class="carousel-item relative flex-none w-full">
        <img src="/storage/{{ $item->image }}" class="w-full h-[300px] object-cover" alt="Carousel Image 1" />
        <div class="absolute bottom-0 text-white bg-black bg-opacity-50 py-2">
          <P class="mx-5 text-xl font-bold">{{$item->judul}}</P>
          <pre class="font-poppins line-clamp-2 mx-5">{{$item->deskripsi}}</pre>
        </div>
      </div>
      @endforeach
    </div>
    
    <button class="absolute top-1/2 left-3 transform -translate-y-1/2 bg-gray-800 bg-opacity-60 text-white px-3 py-1 border" onclick="prevSlide()">❮</button>
    <button class="absolute top-1/2 right-3 transform -translate-y-1/2 bg-gray-800 bg-opacity-60 text-white px-3 py-1 border" onclick="nextSlide()">❯</button>
  </div>

  <div class="container w-[250px] bg-black">

    
  </div>
</div> --}}

<div class="grid justify-items-center bg-welcome">
  <h1 class="text-center fadeZoom text-white text-3xl -my-20 mt-24">Selamat Datang di desa Karangklesem</h1>
  <p class="text-center fadeZoom text-white text-3xl mt-2">Pemerintah Kabupaten Banyumas</p>
  <h2 class="text-white fadeZoomUp">Jl. PRAMUKA NO 645 KARANGKLESEM KEC.PEKUNCEN KODE POS 53164 TELP. 0281 572192</h2>
  <a href="#berita" class="btn fade bg-black text-white hover:text-black w-[325px] scroll-link">Lihat Berita Terbaru</a>
</div>

<h2 id="berita" class="mt-20 fadeUp mb-6 text-center text-2xl font-bold">Berita Karangklesem</h2>

<div class="flex justify-center items-center min-h-screen pb-96">
  <div class="grid grid-cols-3 gap-4 place-content-center">
    @foreach ($posts as $item)
    <a href="/berita/{{$item->id}}" class="card-container">
      <div class="animnaik">
      <div class="card fadeUp card-compact bg-base-100 w-96 group relative cursor-pointer overflow-hidden shadow-lg ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-sm sm:rounded-lg">
        <figure>
          <img src="/storage/{{ $item->image }}" alt="{{$item->judul}}" width="auto" height="300px" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">{{ $item->judul }}</h2>
          <p class="line-clamp-2">{{ $item->deskripsi }}</p>
        </div>
      </div>
    </div>
    </a>
    @endforeach
    <a href="#" class="text-center fadeUp lihatlebih mt-4 text-xl font-bold cursor-pointer col-span-3">Lihat lebih</a>
  </div>
</div>


</x-main-layout>
