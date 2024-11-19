<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Struktur Organisasi') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  <form action="{{ route('admin.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-4">
                          <label for="Nama" class="block text-gray-700 font-bold">Nama:</label>
                          <input type="text" name="Nama" id="Nama" value="{{ $struktur->Nama }}" class="w-full border-gray-300 rounded-md">
                          @error('Nama') <p class="text-red-600">{{ $message }}</p> @enderror
                      </div>

                      <div class="mb-4">
                          <label for="Jabatan" class="block text-gray-700 font-bold">Jabatan:</label>
                          <input type="text" name="Jabatan" id="Jabatan" value="{{ $struktur->Jabatan }}" class="w-full border-gray-300 rounded-md">
                          @error('Jabatan') <p class="text-red-600">{{ $message }}</p> @enderror
                      </div>

                      <div class="mb-4">
                          <label for="image" class="block text-gray-700 font-bold">Foto:</label>
                          @if($struktur->image)
                              <img src="{{ asset('storage/' . $struktur->image) }}" alt="Foto Struktur" class="mb-4 w-32 h-32 object-cover">
                          @endif
                          <input type="file" name="image" id="image" class="w-full border-gray-300 rounded-md">
                          @error('image') <p class="text-red-600">{{ $message }}</p> @enderror
                      </div>

                      <div>
                          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                              Simpan Perubahan
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
