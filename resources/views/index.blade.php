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
  <h1 class="text-center text-white text-3xl -my-20 mt-24">Selamat Datang di desa Karangklesem</h1>
  <p class="text-center text-white text-3xl mt-2">Pemerintah Kabupaten Banyumas</p>
  <h2 class="text-white">Jl. PRAMUKA NO 645 KARANGKLESEM KEC.PEKUNCEN KODE POS 53164 TELP. 0281 572192</h2>
  <a href="#berita" class="btn bg-black text-white hover:text-black w-[325px] scroll-link">Jelajahi Desa</a>
</div>

<div class="coontainer mx-auto px-10 mt-10">
  <p class="text-3xl fade font-bold">SOTK</p>
  <p class="fadeUp">Struktur Organisasi dan Tata Kerja Desa Karangklesem</p>
  <div class="grid grid-cols-2 fadeZoomUp mt-4 gap-4">
    <div class="tooltip" data-tip="Wisnu Cantra (Jabatan)">
      <div class="card card-side animnaik text-start bg-base-100 shadow-xl">
        <figure>
          <img
            src="/img/gambar/moza.jpg"
            alt="Movie" class="h-48" >
        </figure>
        <div class="card-body">
          <P class="card-title items-end text-2xl">Nama Panjang</P>
          <p class="text-xl">Jabatan</p>
        </div>
      </div>
    </div>
    <div class="tooltip" data-tip="Wisnu Cantra (Jabatan)">
      <div class="card card-side animnaik fadeUp text-start bg-base-100 shadow-xl">
        <figure>
          <img
            src="/img/gambar/moza.jpg"
            alt="Movie" class="h-48" >
        </figure>
        <div class="card-body">
          <P class="card-title items-end text-2xl">Nama Panjang</P>
          <p class="text-xl">Jabatan</p>
        </div>
      </div>
    </div>
    <div class="tooltip" data-tip="Wisnu Cantra (Jabatan)">
      <div class="card card-side animnaik fadeUp text-start bg-base-100 shadow-xl">
        <figure>
          <img
            src="/img/gambar/moza.jpg"
            alt="Movie" class="h-48" >
        </figure>
        <div class="card-body">
          <P class="card-title items-end text-2xl">Nama Panjang</P>
          <p class="text-xl">Jabatan</p>
        </div>
      </div>
    </div>
    <div class="tooltip" data-tip="Wisnu Cantra (Jabatan)">
      <div class="card card-side animnaik fadeUp text-start bg-base-100 shadow-xl">
        <figure>
          <img
            src="/img/gambar/moza.jpg"
            alt="Movie" class="h-48" >
        </figure>
        <div class="card-body">
          <P class="card-title items-end text-2xl">Nama Panjang</P>
          <p class="text-xl">Jabatan</p>
        </div>
      </div>
    </div>
    <a href="/profil#struktur" class="text-center fadeUp lihatlebih mt-4 text-xl font-bold cursor-pointer col-span-2">Lihat Selengkapnya</a>
  </div>
</div>

<div class="container mx-auto mt-20 p-10">
  <p class="text-3xl font-bold text-center fadeUp mb-3">Peta Desa</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15827.134589748752!2d109.07699722858366!3d-7.378128001908054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65621ecc23b9d9%3A0x5027a76e3550250!2sKarangklesem%2C%20Kec.%20Pekuncen%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1731632236231!5m2!1sid!2sid" 
      width="100%" 
      height="400" 
      class="fadeUp"
      style="border:4px solid #000 ;border-radius:8px" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>


<p id="berita" class="mt-24 fadeUp mb-6 text-center text-2xl font-bold">Berita Karangklesem</p>

<div class="flex justify-center items-center min-h-screen pb-14">
  <div class="grid grid-cols-3 gap-4 place-content-center">
    @foreach ($posts as $item)
    <a href="/berita/{{$item->id}}" class="card-container">
      <div class="animnaik">
      <div class="card fadeUp card-compact bg-base-100 w-96 group relative cursor-pointer overflow-hidden shadow-lg ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-sm sm:rounded-lg">
        <figure>
          <img src="/storage/{{ $item->image }}" alt="{{$item->judul}}" width="auto" height="300px" />
        </figure>
        <div class="card-body">
          <p class="text-sm">{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd, D MMMM Y') }} Oleh {{$item->username}}</p>
          <p class="text-md">Dibaca {{ $item->views }} kali</p>
          <h2 class="card-title line-clamp-1">{{ $item->judul }}</h2>
          <p class="line-clamp-2">{{ $item->deskripsi }}</p>
        </div>
      </div>
    </div>
    </a>
    @endforeach
    <a href="/berita" class="text-center fadeUp lihatlebih mt-4 text-xl font-bold cursor-pointer col-span-3">Lihat lebih</a>
  </div>
</div>
</x-main-layout>
