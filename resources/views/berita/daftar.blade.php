<x-main-layout>
    <p id="berita" class="mt-24 fadeUp mb-6 text-center text-2xl font-bold">Daftar Berita</p>

    <!-- Form Pencarian -->
    <form method="GET" action="{{ route('berita') }}" class="flex justify-center mb-6">
        <input
            type="text"
            name="search"
            placeholder="Cari berita..."
            value="{{ request('search') }}"
            class="input input-bordered w-1/3 fadeRight" />
        <div class="fadeLeft"><button type="submit" class="btn btn-primary ml-2">Cari</button></div>
    </form>

    <div<div class="flex justify-center items-center min-h-screen pb-14">
        <div class="w-full max-w-7xl px-4 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($posts as $item)
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
                </a>
                @empty
                <p class="text-center text-gray-500">Tidak ada berita ditemukan.</p>
                @endforelse
            </div>
        </div>
        </div>

        <!-- Navigasi Pagination -->
        <div class="container mx-auto px-8">
            {{ $posts->appends(request()->query())->links() }}
        </div>
</x-main-layout>