<x-main-layout title="Beranda">
  <div class="grid grid-cols-2 gap-6">
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
</div>
</x-main-layout>
