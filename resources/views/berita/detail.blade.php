<x-main-layout title="{{$post->judul}}">
  <section class="container mx-auto px-52 mt-5">
    <img src="/storage/{{ $post->image }}" alt="Gambar berita" width="600px" height="auto">
    <div class="w-[600px]">
    <h1 class="text-2xl font-bold">{{$post->judul}}</h1>
    <div class="text-sm">Diposting Oleh {{$post->username}} Pada {{ \Carbon\Carbon::now()->locale('id')->isoFormat(' dddd, D MMMM Y | hh:mm')}}<a> WIB</a></div>
    <pre class=" font-poppins mt-6 whitespace-pre-line">{{$post->deskripsi}}</pre>
    </div>
  </section>
</x-main-layout>