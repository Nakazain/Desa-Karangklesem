<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambahkan Berita') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="/tambahdata" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{Auth::user()->name}}" name="username">
                    <!-- Name -->
                    <div>
                        <x-input-label for="judul" :value="__('Judul Berita')" />
                        <x-text-input id="judul" class="input block mt-1 w-full" type="text" name="judul" :value="old('judul')" required autofocus autocomplete="judul" />
                    </div>
            
                    <!-- deskripsi Berita -->
                    <div class="mt-4">
                        <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                        <textarea id="deskripsi" class="textarea textarea-primary border-[#d1d5db] mt-1 w-full" type="text" name="deskripsi" :value="old('deskripsi')" required autocomplete="username"></textarea>
                    </div>
            
                    <!-- gambar -->
                    <div class="mt-4">
                        <x-input-label for="image" :value="__('Tambahkan Gambar')" />
                        <x-text-input id="image-input" class="file-input file-input-bordered w-full max-w-xs" type="file" name="image" autocomplete="image" required/>
                        <div class="image-preview mt-4">
                            <p> Preview Gambar</p>
                            <img id="preview-image" src="#" alt="Preview Gambar" class="w-1/2 rounded-md" style="display: none;" />
                        </div>
                    </div>
            
            
                        <x-primary-button class="btn mt-4">
                            {{ __('Tambahkan') }}
                        </x-primary-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>