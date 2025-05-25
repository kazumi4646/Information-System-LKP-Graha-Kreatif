<x-layout>
    <x-slot:title>alfi</x-slot>       
     <!-- Header -->
  <header class="bg-indigo-600 text-white py-6">
    <div class="max-w-6xl mx-auto px-4">
      <h1 class="text-4xl font-bold">Galeri Kegiatan</h1>
      <p class="text-lg">Dokumentasi aktivitas pembelajaran di LKP Graha Kreatif</p>
    </div>
  </header>

  <!-- Galeri Grid -->
  <main class="py-16">
    <div class="max-w-6xl mx-auto px-4">
      <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-6">

        <!-- Kegiatan 1 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <img src="img/profile/2.jpg" alt="Kegiatan 1" class="h-64 w-full object-cover">
          <div class="p-4">
            <h2 class="font-semibold text-lg">Workshop Excel Dasar</h2>
            <p class="text-sm text-gray-500">12 Februari 2025</p>
          </div>
        </div>

        <!-- Kegiatan 2 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <img src="img/profile/3.jpg" alt="Kegiatan 2" class="h-64 w-full object-cover">
          <div class="p-4">
            <h2 class="font-semibold text-lg">Pelatihan Web Dasar</h2>
            <p class="text-sm text-gray-500">25 Maret 2025</p>
          </div>
        </div>

        <!-- Kegiatan 3 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
          <img src="img/profile/4.jpg" alt="Kegiatan 3" class="h-64 w-full object-cover">
          <div class="p-4">
            <h2 class="font-semibold text-lg">Belajar HTML & CSS</h2>
            <p class="text-sm text-gray-500">10 April 2025</p>
          </div>
        </div>

        <!-- Tambahkan lebih banyak kegiatan di sini -->
        <!-- Contoh:
        <div class="...">
          <img src="..." class="...">
          <div class="...">
            <h2>Judul</h2>
            <p>Tanggal</p>
          </div>
        </div>
        -->

      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-indigo-700 text-white py-8 mt-16">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <p class="text-lg font-semibold">LKP Graha Kreatif</p>
      <p class="text-sm mt-2">Galeri kegiatan untuk mengenang momen pembelajaran terbaik.</p>
      <p class="text-sm mt-4">© 2025 LKP Graha Kreatif. All rights reserved.</p>
    </div>
  </footer> 
</x-layout>