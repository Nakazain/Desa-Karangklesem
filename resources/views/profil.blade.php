<x-main-layout>

  {{-- Visi Misi Desa --}}
  <div id="visimisi"></div>
  <div class="container mx-auto p-10 text-black">
    <h1 class="text-2xl text-center">Visi Misi Desa Karangklesem Kecamatan Pekuncen</h1>
    <p class="text-2xl font-bold mt-4 text-center">VISI</p>
    <p class="text-lg my-3 text-center">"Mewujudkan Desa Karangklesem yang Mandiri, Berdaya Saing, dan Sejahtera melalui Pemberdayaan Masyarakat serta Pengembangan Potensi Lokal"</p>
    <p class="text-2xl font-bold mt-4 text-center">MISI</p>
    <div class="my-4">
      <li>Meningkatkan Kualitas Sumber Daya Manusia (SDM): Menyelenggarakan program pendidikan dan pelatihan yang berkelanjutan bagi warga desa untuk meningkatkan keterampilan dan kemampuan mereka.</li>
      <li>Membangun Infrastruktur Desa yang Memadai: Mengembangkan dan memperbaiki sarana dan prasarana desa, seperti jalan, saluran irigasi, dan fasilitas umum untuk meningkatkan kenyamanan dan kemudahan akses bagi masyarakat.</li>
      <li>Mengembangkan Ekonomi Lokal: Mendukung usaha mikro, kecil, dan menengah (UMKM) serta sektor pertanian dan pariwisata desa agar masyarakat dapat mandiri secara ekonomi.</li>
      <li>Meningkatkan Kesejahteraan Sosial: Memberikan pelayanan kesehatan yang terjangkau dan berkualitas, serta mendukung program-program kesejahteraan untuk masyarakat yang membutuhkan.</li>
      <li>Mewujudkan Desa yang Ramah Lingkungan: Mendorong pengelolaan lingkungan yang berkelanjutan melalui program penghijauan, pengelolaan sampah yang baik, dan pemanfaatan sumber daya alam yang bijak.</li>
    </div>
  </div>

  {{-- Struktur Organisasi Desa --}}
  <div id="struktur"></div>
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
          <p>Kepala Dusun Pada Elo</p>
          <p class="font-bold text-lg mt-2">Nama</p>
        </div>
        <div class="text-center border-2 border-black bg-white rounded-md p-4 w-56">
          <p>Kepala Dusun Empang</p>
          <p class="font-bold text-lg mt-2">Nama</p>
        </div>
      </div>
    </div>
  </div>
  <div id="wilayah"></div>
  <div class="container fadeUp mx-auto px-4 mt-10">
    <p class="text-2xl font-bold text-center mb-3">Willyah desa</p>
    <div class="flex justify-center">
      <div class="grid grid-cols-2 gap-4">
        <div class="card bg-base-100 w-[500px] shadow-xl">
          <div class="card-body">
            <h2 class="card-title border-b-2 pb-2">Desa Karangklesem</h2>
            <div class="grid grid-cols-2 gap-4">
              <p class="opacity-80 col-span-2 ">Batas desa</p>
              <div>
                <p class="font-bold text-lg">Utara</p>
                <p class="text-lg">Batas Utara</p>

                <p class="font-bold text-lg mt-6">Selatan</p>
                <p class="text-lg">Batas Selatan</p>
                
              </div>
              <div>
                <p class="font-bold text-lg">Barat</p>
                <p class="text-lg">Batas Barat</p>

                <p class="font-bold text-lg mt-6">Timur</p>
                <p class="text-lg">Batas Timur</p>
              </div>
              <p class="text-lg font-bold">Luas Desa</p>
              <p class="text-lg">1000 Km</p>
              <p class="text-lg font-bold">Jumlah Penduduk</p>
              <p class="text-lg">1234 Jiwa</p>
            </div>
          </div>
        </div>
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15827.134589748752!2d109.07699722858366!3d-7.378128001908054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65621ecc23b9d9%3A0x5027a76e3550250!2sKarangklesem%2C%20Kec.%20Pekuncen%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1731632236231!5m2!1sid!2sid" 
          width="100%" 
          height="400" 
          style="border:4px solid #000 ;border-radius:8px" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
          </iframe>  
        </div>
      </div>
    </div>
  </div>
</x-main-layout>