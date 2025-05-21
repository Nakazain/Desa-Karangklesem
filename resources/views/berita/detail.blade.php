<x-main-layout title="{{$post->judul}}">
  <div class="grid grid-cols-1 md:grid-cols-2 px-4 md:px-44">
    <div class="container mx-auto mt-5">
      <img src="/storage/{{ $post->image }}" alt="Gambar berita" class="w-full max-w-[600px] h-auto">
      <div class="max-w-[600px]">
        <h1 class="text-2xl font-bold">{{$post->judul}}</h1>
        <div class="text-sm">Diposting Oleh {{$post->username}} Pada {{ \Carbon\Carbon::parse($post->created_at)->locale('id')->isoFormat('dddd, D MMMM Y | hh:mm') }}<a> WIB</a></div>
        <div class="text-gray-500 text-sm">Dibaca Sebanyak {{ $post->views }} kali</div>
        <div class="font-poppins mt-6 whitespace-pre-line">{{$post->deskripsi}}</div>
      </div>
    </div>
  </div>
</x-main-layout>