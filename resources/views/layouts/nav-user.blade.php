<div class="navbar bg-base-100 h-[90px] border-b-2">
  <div>
    <a class="ml-4 fadeRight"><img src="/img/logo-bms.png" width="70px" height="auto"></a>
    <div class="ml-3">
    <p class="text-lg fadeDown font-black">Desa Karangklesem Kecamatan Pekuncen</p>
    <p class="text-lg fadeUp font-black text-primary -mt-2">Pemerintah Kabupaten Banyumas</p>
  </div>
  </div>
</div>
<div class="navbar sticky top-0 z-50 bg-gray-900 h-[30px] border-b-2">
  <div class="navbar-start text-white">
    <div class="drawer">
      <input id="my-drawer" type="checkbox" class="drawer-toggle" />
      <div class="drawer-content">
        <!-- Page content here -->
        <label for="my-drawer" class="btn btn-ghost drawer-button lg:hidden">        
          <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg></label>
      </div>
      <div class="drawer-side z-10">
        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
          <!-- Sidebar content here -->
          <li><a>Sidebar Item 1</a></li>
          <li><a>Sidebar Item 2</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu fadeDown text-white menu-horizontal px-1">
        <li><a href="/">Beranda</a></li>
        <li class="relative group">
            <a class="cursor-pointer">Profil Desa</a>
            <ul class="absolute left-0 top-full hidden group-hover:block p-2 text-black bg-white shadow-lg z-50">
              @if (Route::is('profil'))
                <li><a class="scroll-link" href="#visimisi">Visi Misi</a></li>
                <li><a class="scroll-link" href="#struktur">Sruktur Organisasi Pemerintahan Desa</a></li>
                <li><a class="scroll-link" href="#wilayah">Wilayah Desa</a></li>
                @else
                <li><a href="/profil">Visi Misi</a></li>
                <li><a href="/profil#struktur">Sruktur Organisasi Pemerintahan Desa</a></li>
                <li><a href="/profil#wilayah">Wilayah Desa</a></li>
                @endif
            </ul>
        </li>
        <li class="relative group z-50">
            <a href="/berita" class="cursor-pointer">Berita</a>
        </li>
    </ul>
</div>
  <div class="navbar-end">
    
  </div>
</div>