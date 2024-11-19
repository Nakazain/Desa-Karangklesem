<x-main-layout title="{{$post->judul}}">
  <div class="grid grid-cols-2 px-44">
  <div class="container mx-auto mt-5">
    <img src="/storage/{{ $post->image }}" alt="Gambar berita" width="600px" height="auto">
    <div class="w-[600px]">
    <h1 class="text-2xl font-bold">{{$post->judul}}</h1>
    <div class="text-sm">Diposting Oleh {{$post->username}} Pada {{ \Carbon\Carbon::parse($post->created_at)->locale('id')->isoFormat('dddd, D MMMM Y | hh:mm') }}<a> WIB</a></div>
    <div class="text-gray-500 text-sm">Dibaca Sebanyak {{ $post->views }} kali</div>
  
    <pre class=" font-poppins mt-6 whitespace-pre-line">{{$post->deskripsi}}</pre>
    </div>
  </div>
</div>
</x-main-layout>