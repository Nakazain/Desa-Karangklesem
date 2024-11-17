<x-main-layout>
  <p id="berita" class="mt-24 fadeUp mb-6 text-center text-2xl font-bold">Daftar Berita Karangklesem</p>

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
            <p class="text-md">Dilihat {{ $item->views }} kali</p>
            <h2 class="card-title">{{ $item->judul }}</h2>
            <p class="line-clamp-2">{{ $item->deskripsi }}</p>
          </div>
        </div>
      </div>
      </a>
      @endforeach
    </div>
  </div>
  
</x-main-layout>