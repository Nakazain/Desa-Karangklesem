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
        <a role="tab" href="/dashboard" class="tab">Daftar Berita</a>
        <a role="tab" class="tab tab-active">Struktur perangkat Desa</a>
      </div>
  </div>
  <div class="container mx-auto p-4 bg-white border-x border-b">
    <div class="container mx-auto p-4 mt-10">
      <p class="text-2xl font-bold text-center p-4 mb-4">Sruktur Organisasi Pemerintahan Desa</p>
      <div class="flex flex-col items-center space-y-10">
        <!-- Kepala Desa -->
        <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
          <p>KEPALA DESA</p>
          <p class="font-bold text-lg mt-2">Wisnu</p>
        </div>
    
        <!-- Sekretaris Desa -->
        <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
          <p>Sekretaris Desa</p>
          <p class="font-bold text-lg mt-2">Naudal</p>
        </div>
    
        <!-- Kepala Seksi -->
        <div class="flex justify-center space-x-4">
          <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
            <p>Kepala Seksi Kesejahteraan dan Pelayanan</p>
            <p class="font-bold text-lg mt-2">Azom</p>
          </div>
          <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
            <p>Kepala Seksi Pemerintahan</p>
            <p class="font-bold text-lg mt-2">Apdipitoe</p>
          </div>
          <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
            <p>Kepala Urusan Umum dan Perencanaan</p>
            <p class="font-bold text-lg mt-2">Nahker</p>
          </div>
          <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
            <p>Kepala Urusan Keuangan</p>
            <p class="font-bold text-lg mt-2">Ahyar</p>
          </div>
        </div>
    
        <!-- Kepala Dusun -->
        <div class="flex justify-center space-x-4">
          <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
            <p>Kepala Dusun 1</p>
            <p class="font-bold text-lg mt-2">Nama</p>
          </div>
          <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
            <p>Kepala Dusun 1</p>
            <p class="font-bold text-lg mt-2">Nama</p>
          </div>
        </div>
      </div>
    </div>  
  </div>
</x-app-layout>