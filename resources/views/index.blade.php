<x-main-layout title="Beranda">
<div class="grid justify-items-center bg-welcome w-full max-w-[500px] md:max-w-none mx-auto px-4 py-10 md:py-20">
  <h1 class="text-center text-white font-bold text-3xl md:text-3xl -my-10 md:my-0 mt-16 md:mt-24">
    Selamat Datang di desa Karangklesem
  </h1>
  <p class="text-center text-white text-lg md:text-3xl mt-2">
    Pemerintah Kabupaten Banyumas
  </p>
  <h2 class="text-white text-xs md:text-base text-center">
    Jl. PRAMUKA NO 645 KARANGKLESEM KEC.PEKUNCEN KODE POS 53164 TELP. 0281 572192
  </h2>
  <a href="#berita" class="btn bg-black text-white hover:text-black w-full max-w-xs md:w-[325px] scroll-link mt-4 md:mt-6">
    Jelajahi Desa
  </a>
</div>

<div class="coontainer mx-auto px-4 md:px-10 mt-10">
  <p class="text-3xl fade font-bold">SOTK</p>
  <p>Struktur Organisasi dan Tata Kerja Desa Karangklesem</p>
  <div class="grid grid-cols-1 md:grid-cols-2 mt-4 gap-4">
    @if($kepalaDesa)
    <div class="tooltip" data-tip="{{ $kepalaDesa->Nama }} ({{ $kepalaDesa->Jabatan }})">
      <div class="card card-side animnaik text-start bg-base-100 shadow-xl">
        <figure>
          <img
            src="{{ asset('storage/' . $kepalaDesa->image) }}"
            alt="{{ $kepalaDesa->Nama }}" class="h-48 w-40" >
        </figure>
        <div class="card-body">
          <P class="card-title items-end text-2xl">{{ $kepalaDesa->Nama }}</P>
          <p class="text-xl">{{ $kepalaDesa->Jabatan }}</p>
        </div>
      </div>
    </div>
    @endif

    @if($sekretaris)
    <div class="tooltip" data-tip="{{ $sekretaris->Nama }} ({{ $sekretaris->Jabatan }})">
      <div class="card card-side animnaik text-start bg-base-100 shadow-xl">
        <figure>
          <img
            src="{{ asset('storage/' . $sekretaris->image) }}"
            alt="{{ $sekretaris->Nama }}" class="h-48 w-40" >
        </figure>
        <div class="card-body">
          <P class="card-title items-end text-2xl">{{ $sekretaris->Nama }}</P>
          <p class="text-xl">{{ $sekretaris->Jabatan }}</p>
        </div>
      </div>
    </div>
    @endif

    @if($kepalaSeksi)
    <div class="tooltip" data-tip="{{ $kepalaSeksi->Nama }} ({{ $kepalaSeksi->Jabatan }})">
      <div class="card card-side animnaik text-start bg-base-100 shadow-xl">
        <figure>
          <img
            src="{{ asset('storage/' . $kepalaSeksi->image) }}"
            alt="{{ $kepalaSeksi->Nama }}" class="h-48 w-40" >
        </figure>
        <div class="card-body">
          <P class="card-title items-end text-2xl">{{ $kepalaSeksi->Nama }}</P>
          <p class="text-xl">{{ $kepalaSeksi->Jabatan }}</p>
        </div>
      </div>
    </div>
    @endif

    @if($kepalaDusun)
    <div class="tooltip" data-tip="Wisnu Cantra (Jabatan)">
      <div class="card card-side animnaik text-start bg-base-100 shadow-xl">
        <figure>
          <img
            src="{{ asset('storage/' . $kepalaDusun->image) }}"
            alt="{{ $kepalaDusun->Nama }}" class="h-48 w-40" >
        </figure>
        <div class="card-body">
          <P class="card-title items-end text-2xl">{{ $kepalaDusun->Nama }}</P>
          <p class="text-xl">{{ $kepalaDusun->Jabatan }}</p>
        </div>
      </div>
    </div>
    @endif
    <a href="/profil#struktur" class="text-center lihatlebih mt-4 text-xl font-bold cursor-pointer col-span-1 md:col-span-2">Lihat Selengkapnya</a>
  </div>
</div>

<div class="container mx-auto mt-20 p-10">
  <p class="text-3xl font-bold text-center mb-3">Peta Desa</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15827.134589748752!2d109.07699722858366!3d-7.378128001908054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65621ecc23b9d9%3A0x5027a76e3550250!2sKarangklesem%2C%20Kec.%20Pekuncen%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1731632236231!5m2!1sid!2sid" 
      width="100%" 
      height="400" 
      style="border:4px solid #000 ;border-radius:8px" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>


<p id="berita" class="mt-24 mb-6 text-center text-2xl font-bold">Berita Karangklesem</p>

<div class="flex justify-center items-center min-h-screen pb-14">
  <div class="w-full max-w-7xl px-4 mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($posts as $item)
      <a href="/berita/{{ $item->id }}" class="block group">
        <div class="card animnaik card-compact bg-base-100 w-full h-full overflow-hidden shadow-lg ring-1 ring-gray-900/5 rounded-lg">
          <figure>
            <img src="/storage/{{ $item->image }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover" />
          </figure>
          <div class="card-body">
            <p class="text-sm text-gray-500">
              {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd, D MMMM Y') }} Oleh {{ $item->username }}
            </p>
            <p class="text-sm text-gray-600">Dibaca {{ $item->views }} kali</p>
            <h2 class="card-title line-clamp-1">{{ $item->judul }}</h2>
            <p class="line-clamp-2">{{ $item->deskripsi }}</p>
          </div>
        </div>
      </a>
      @endforeach

      <a href="/berita" class="text-center lihatlebih mt-6 text-xl font-bold cursor-pointer col-span-1 md:col-span-2 lg:col-span-3">
        Lihat lebih
      </a>
    </div>
  </div>
</div>

</x-main-layout>
