<x-main-layout>
  <p id="berita" class="mt-24 fadeUp mb-6 text-center text-2xl font-bold">Daftar Berita</p>

  <!-- Form Pencarian -->
  <form method="GET" action="{{ route('berita') }}" class="flex justify-center mb-6">
      <input 
          type="text" 
          name="search" 
          placeholder="Cari berita..." 
          value="{{ request('search') }}" 
          class="input input-bordered w-1/3"
      />
      <button type="submit" class="btn btn-primary ml-2">Cari</button>
  </form>

  <div class="flex justify-center items-center min-h-screen pb-14">
      <div class="grid grid-cols-3 gap-4 place-content-center">
          @forelse ($posts as $item)
              <a href="/berita/{{ $item->id }}" class="card-container">
                  <div class="animnaik">
                      <div class="card fadeUp card-compact bg-base-100 w-96 group relative cursor-pointer overflow-hidden shadow-lg ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-sm sm:rounded-lg">
                          <figure>
                              <img src="/storage/{{ $item->image }}" alt="{{ $item->judul }}" width="auto" height="300px" />
                          </figure>
                          <div class="card-body">
                              <p class="text-md">Dilihat {{ $item->views }} kali</p>
                              <h2 class="card-title">{{ $item->judul }}</h2>
                              <p class="line-clamp-2">{{ $item->deskripsi }}</p>
                          </div>
                      </div>
                  </div>
              </a>
          @empty
              <p class="text-center text-gray-500">Tidak ada berita ditemukan.</p>
          @endforelse
      </div>
  </div>

  <!-- Navigasi Pagination -->
  <div class="container mx-auto px-8">
      {{ $posts->appends(request()->query())->links() }}
  </div>
</x-main-layout>
