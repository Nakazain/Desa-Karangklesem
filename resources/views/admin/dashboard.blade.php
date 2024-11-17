<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Selamat datang <a class=" text-blue-700">{{ Auth::user()->name }}</a> Kamu adalah admin
                    <a butt></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div role="tablist" class="tabs tabs-lifted tabs-lg">
            <a role="tab" class="tab tab-active">Kelola Berita</a>
            <a href="/struktur" role="tab" class="tab">Struktur perangkat Desa</a>
          </div>
    </div>
    <div class="container mx-auto p-4 bg-white border-x border-b">
        <a href="/add" class="btn btn-outline my-6 transition-all duration-300 w-full hover:-translate-y-2 hover:shadow-lg text-center text-xl">Tambah berita</a>
        <p class="text-2xl text-center font-bold mb-4">Berita yang diposting</p>
        <div class="grid grid-cols-3 gap-6">
            @foreach ($posts as $item)
                <div class="card bg-base-100 w-full rounded-md border">
                    <div class="card-body flex flex-col bg-base-400">
                        <!-- Tanggal Post -->
                        <div class="text-sm text-gray-500 mb-2">
                            {{ \Carbon\Carbon::now()->locale('id')->isoFormat('ddd, D MMMM Y') }}
                        </div>
                        
                        <!-- Gambar -->
                        @if ($item->image)
                            <img src="/storage/{{ $item->image }}" alt="Gambar" class="rounded-md mb-3">
                        @endif
                        
                        <!-- Judul -->
                        <h2 class="card-title line-clamp-1 text-lg font-semibold mb-2">
                            {{ $item->judul }}
                        </h2>
                        
                        <!-- Deskripsi -->
                        <pre class="font-poppins line-clamp-4 flex-grow mb-4">{{ $item->deskripsi }}</pre>
                        
                        <!-- Tombol -->
                        <div class="mt-auto space-y-2">
                            <a href="/berita/{{ $item->id }}" class="btn dark:bg-info w-full">Lihat</a>
                            <a href="/berita/{{ $item->id }}/edit" class="btn btn-warning btn-sm w-full">Edit</a>
                            <button class="btn btn-sm w-full btn-error" onclick="document.getElementById('hapus-{{ $item->id }}').showModal()">Hapus</button>
                        </div>
                        
                        <!-- Dialog Konfirmasi Hapus -->
                        <dialog id="hapus-{{ $item->id }}" class="modal modal-bottom sm:modal-middle">
                            <div class="modal-box">
                                <h3 class="text-lg font-bold">Yakin mau hapus?</h3>
                                <p class="py-4">Anda akan menghapus postingan ini secara permanen. Anda yakin?</p>
                                <div class="modal-action flex justify-between">
                                    <form method="dialog">
                                        <button class="btn btn-warning">Batal</button>
                                    </form>
                                    <form action="{{ route('postingan.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-error">Hapus</button>
                                    </form>
                                </div>         
                            </div>
                        </dialog>
                    </div>
                </div>
            @endforeach
        </div>        
    </div>
</x-app-layout>
