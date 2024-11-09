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
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container flex mx-auto p-4">
    @foreach ($posts as $item)
    <div class="card bg-base-100 w-96 shadow-xl rounded-md" style="margin: 20px">
        <div class="card-body bg-base-400">
            <div class="">{{ \Carbon\Carbon::now()->locale('id')->isoFormat(' ddd, D MMMM Y ')}}</div>
            @if ($item->image == null) 
            @else
                <img src="/storage/{{$item->image}}" alt="Gambar">
            @endif
            <h2 class="card-title line-clamp-1 mt">
                {{ $item->judul }}
            </h2>
            <pre class=" font-poppins line-clamp-4">{{ $item->deskripsi }}</pre>
            {{-- <a href="/postingan/{{ $item->id }}" class="btn bg-amber-500 dark:bg-info dark:btn-info"> Lihat</a> --}}
                <button class="btn btn-sm w-full btn-error" onclick="document.getElementById('hapus-{{ $item->id }}').showModal()">Hapus</button>
            <dialog id="hapus-{{ $item->id }}" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <h3 class="text-lg font-bold">Yakin mau hapus</h3>
                    <p class="py-4">Anda akan menghapus postingan in secara permanen, Anda yakin?</p>
                    <div class="modal-action">
                    <form method="dialog">
                        <button class="btn btn-warning">Gajadi deh</button>
                    </form>
                    <form action="{{ route('postingan.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-error">Tentu</button>
                    </form>
                    </div>         
                </div>
            </dialog>
        </div>
    </div>
    @endforeach
    </div>
    <a class="btn btn-outline fixed bottom-5 right-5" href="/add">Tambahkan Berita</a>
</x-app-layout>
