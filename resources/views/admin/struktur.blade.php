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
      <div class="flex flex-col items-center space-y-10 p-4">
        <!-- Kepala Desa -->
        <p class="text-2xl font-bold border-b-4 p-2 border-red-500">Kepala Desa</p>
        @if($kepalaDesa)
        <div class="flex items-center bg-gray-100 shadow-md rounded-lg p-4 w-[350px]">
          <img
            src="{{ asset('storage/' . $kepalaDesa->image) }}"
            alt="{{ $kepalaDesa->Nama }}"
            class="w-24 h-24 object-cover rounded-md mr-4">
          <div>
            <p class="font-bold text-lg">{{ $kepalaDesa->Nama }}</p>
            <p class="text-gray-600">{{ $kepalaDesa->Jabatan }}</p>
            <a href="{{ route('admin.edit', $kepalaDesa->id) }}" 
              class="text-blue-500 hover:underline text-sm mt-2 block">
              Edit
            </a>
          </div>
        </div>
        @endif
      
        <!-- Sekretaris Desa -->
        <p class="text-2xl font-bold border-b-4 p-2 border-red-500">Sekretaris Desa</p>
        @if($sekretaris)
        <div class="flex items-center bg-gray-100 shadow-md rounded-lg p-4 w-[350px]">
          <img
            src="{{ asset('storage/' . $sekretaris->image) }}"
            alt="{{ $sekretaris->Nama }}"
            class="w-24 h-24 object-cover rounded-md mr-4">
          <div>
            <p class="font-bold text-lg">{{ $sekretaris->Nama }}</p>
            <p class="text-gray-600">{{ $sekretaris->Jabatan }}</p>
            <a href="{{ route('admin.edit', $sekretaris->id) }}" 
              class="text-blue-500 hover:underline text-sm mt-2 block">
              Edit
            </a>
          </div>
        </div>
        @endif
      
        <!-- Kepala Seksi -->
        <p class="text-2xl font-bold border-b-4 p-2 border-red-500">Kepala Seksi</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-5xl">
          @foreach($kepalaSeksi as $seksi)
          <div class="flex items-center bg-gray-100 shadow-md rounded-lg p-4">
            <img
              src="{{ asset('storage/' . $seksi->image) }}"
              alt="{{ $seksi->Nama }}"
              class="w-24 h-24 object-cover rounded-md mr-4">
            <div>
              <p class="font-bold text-lg">{{ $seksi->Nama }}</p>
              <p class="text-gray-600">{{ $seksi->Jabatan }}</p>
              <a href="{{ route('admin.edit', $seksi->id) }}" 
                class="text-blue-500 hover:underline text-sm mt-2 block">
                Edit
              </a>
            </div>
          </div>
          @endforeach
        </div>
      
        <!-- Kepala Dusun -->
        <p class="text-2xl font-bold border-b-4 p-2 border-red-500">Kepala Dusun</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-5xl">
          @foreach($kepalaDusun as $dusun)
          <div class="flex items-center bg-gray-100 shadow-md rounded-lg p-4">
            <img
              src="{{ asset('storage/' . $dusun->image) }}"
              alt="{{ $dusun->Nama }}"
              class="w-24 h-24 object-cover rounded-md mr-4">
            <div>
              <p class="font-bold text-lg">{{ $dusun->Nama }}</p>
              <p class="text-gray-600">{{ $dusun->Jabatan }}</p>
              <a href="{{ route('admin.edit', $dusun->id) }}" 
                class="text-blue-500 hover:underline text-sm mt-2 block">
                Edit
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  
  </x-app-layout>