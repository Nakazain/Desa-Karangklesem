<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
      {{-- @if (session('success'))
      <div class="bg-green-500 text-white p-4 rounded-md mb-4">
          {{ session('success') }}
      </div>
      @endif --}}
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
        <a role="tab" href="/dashboard" class="tab">Daftar Berita</a>
        <a role="tab" class="tab tab-active">Struktur perangkat Desa</a>
      </div>
  </div>
  <div class="container mx-auto p-4 bg-white border-x border-b">
    <div class="container mx-auto p-4 mt-10">
      <p class="text-2xl font-bold text-center p-4 mb-4">Struktur Organisasi Pemerintahan Desa</p>
      <div class="flex flex-col items-center space-y-10">
      <!-- Kepala Desa -->
      @if($kepalaDesa)
      <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
          <p>{{ $kepalaDesa->Jabatan }}</p>
          <p class="font-bold text-lg mt-2">{{ $kepalaDesa->Nama }}</p>
          <a href="{{ route('admin.edit', $kepalaDesa->id) }}" 
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded mt-4 inline-block">
            Edit
          </a>
      </div>
      @endif

      <!-- Sekretaris Desa -->
      @if($sekretaris)
      <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
          <p>{{ $sekretaris->Jabatan }}</p>
          <p class="font-bold text-lg mt-2">{{ $sekretaris->Nama }}</p>
          <a href="{{ route('admin.edit', $sekretaris->id) }}" 
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded mt-4 inline-block">
            Edit
          </a>
      </div>
      @endif

      <!-- Kepala Seksi -->
      <div class="flex justify-center space-x-4">
          @foreach($kepalaSeksi as $seksi)
          <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
              <p>{{ $seksi->Jabatan }}</p>
              <p class="font-bold text-lg mt-2">{{ $seksi->Nama }}</p>
              <a href="{{ route('admin.edit', $seksi->id) }}" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded mt-4 inline-block">
                Edit
              </a>
          </div>
          @endforeach
      </div>

      <!-- Kepala Dusun -->
      <div class="flex justify-center space-x-4">
          @foreach($kepalaDusun as $dusun)
          <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
              <p>{{ $dusun->Jabatan }}</p>
              <p class="font-bold text-lg mt-2">{{ $dusun->Nama }}</p>
              <a href="{{ route('admin.edit', $dusun->id) }}" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded mt-4 inline-block">
                Edit
              </a>
          </div>
          @endforeach
      </div>
      </div>
    </div>
  </div>
  
  </x-app-layout>