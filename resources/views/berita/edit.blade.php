<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Berita') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  <form action="{{ route('berita.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      
                      <!-- Username -->
                      <div class="mb-4">
                          <x-text-input type="hidden" name="username" id="username" class="mt-1 block w-full" value="{{ $post->username }}" required />
                      </div>

                      <!-- Judul -->
                      <div class="mb-4">
                          <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                          <x-text-input type="text" name="judul" id="judul" class="input block mt-1 w-full" value="{{ $post->judul }}" required />
                      </div>

                      <!-- Deskripsi -->
                      <div class="mb-4">
                          <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                          <textarea name="deskripsi" id="deskripsi" rows="5" class="textarea textarea-primary border-[#d1d5db] mt-1 w-full">{{ $post->deskripsi }}</textarea>
                      </div>

                      <!-- Gambar -->
                      <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Ubah Gambar (Opsional)</label>
                        <x-text-input type="file" name="image" id="image-input" class="file-input file-input-bordered w-full max-w-xs" />
                        <div class="image-preview mt-4 grid grid-cols-2 gap-5" style="display: none;" id="image-preview-container">
                            <p id="before-text" class="font-medium">Sebelum</p>
                            <p id="after-text" class="font-medium">Sesudah</p>
                            @if ($post->image)
                                <div class="mb-2">
                                    <img src="/storage/{{ $post->image }}" alt="Gambar Berita" class="rounded-md">
                                </div>
                            @endif
                            <img id="preview-image" src="#" class="rounded-md" alt="Preview Gambar" style="display: none;" />
                        </div>
                    </div>
                    
                      <!-- Tombol -->
                      <div class="flex justify-end space-x-4">
                          <a href="{{ route('dashboard') }}" class="btn btn-secondary">Batal</a>
                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
