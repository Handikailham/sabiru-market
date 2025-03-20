@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <!-- Slider Section -->
<section class="bg-white pt-0 pb-4 md:pb-6">
  <div class="w-full">
    <div class="relative">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <img src="{{ asset('images/slide1.jpg') }}" alt="Slide 1" class="w-full h-auto object-cover">
          </div>
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <img src="{{ asset('images/slide2.jpg') }}" alt="Slide 2" class="w-full h-auto object-cover">
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('images/slide3.jpg') }}" alt="Slide 1" class="w-full h-auto object-cover">
          </div>
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <img src="{{ asset('images/slide4.jpg') }}" alt="Slide 2" class="w-full h-auto object-cover">
          </div>
         
        </div>
        <!-- Titik indikator di tengah bawah gambar -->
        <div class="swiper-pagination absolute bottom-4 left-1/2 transform -translate-x-1/2"></div>
      </div>
    </div>
  </div>
</section>

  <!-- Swiper.js CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    });
  </script>

<!-- Menu Populer Section -->
<section class="py-8 container mx-auto px-4 mt-8">
  <!-- Judul (ditengah) -->
  <h2 class="text-3xl font-bold text-blue-500 mb-6 text-center">
    <span class="bg--500 text-black px-4 py-2 inline-block rounded-full">
      Menu Populer
    </span>
  </h2>

  <!-- Grid Produk (ditengah) -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-items-center">
    @foreach($products as $product)
      <!-- Link ke Detail Produk -->
      <a href="{{ route('product.show', $product->id) }}" class="block w-full max-w-xs">
        <div class="bg-white rounded-xl p-4 text-gray-800 shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
          <!-- Gambar Produk (tengah, efek zoom saat hover) -->
          <div class="flex justify-center mt-2">
            <img
              src="{{ asset('uploads/' . $product->gambar) }}"
              alt="{{ $product->nama_produk }}"
              class="w-40 h-40 object-contain transition-transform duration-300 transform hover:scale-110"
            />
          </div>
          <!-- Nama Produk -->
          <h3 class="text-lg font-bold mt-4 tracking-wide text-center">
            {{ $product->nama_produk }}
          </h3>
        </div>
      </a>
    @endforeach
  </div>

  <!-- Tombol Pesan Sekarang (di tengah setelah semua produk) -->
  <div class="text-center mt-8">
    <a
      href="{{ route('product.index') }}"
      class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition duration-300 inline-block text-lg font-semibold"
    >
      Pesan Sekarang
    </a>
  </div>
</section>



<!-- Testimoni Section dengan jarak tambahan -->
<section class="py-16 bg-blue-50 mt-15">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-12 text-blue-600">
      Testimoni Pelanggan
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Testimoni 1 -->
      <div class="bg-white p-8 rounded-2xl shadow-md relative transition-transform duration-300 hover:scale-105">
        <!-- Foto Profil -->
        <div class="w-16 h-16 rounded-full overflow-hidden absolute -top-8 left-6">
          <img src="{{ asset('images/pp2.jpeg') }}" alt="Foto Profil Andi" class="w-full h-full object-cover">
        </div>
        <!-- Konten Testimoni -->
        <div class="mt-10">
          <p class="text-gray-700 italic text-lg">
            "Sabiru Market memiliki Menu terbaik yang pernah saya coba! Rasanya autentik dan minumannya sangat menyegarkan."
          </p>
          <p class="mt-6 text-right text-gray-600 font-semibold">
            - Andi
          </p>
        </div>
        @endforeach
      </div>

      <!-- Tombol untuk Tambah Testimoni -->
      <div class="text-center mt-8">
        <button @click="open = true" class="bg-green-500 text-white px-6 py-3 rounded-full hover:bg-green-600 transition duration-300 inline-block text-lg font-semibold">
          Tambah Testimoni
        </button>
      </div>

      @if(session('success'))
        <script>
          alert("{{ session('success') }}");
        </script>
      @endif

      <!-- Modal Pop-up Tambah Testimoni -->
      <div x-show="open" x-cloak class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-2xl shadow-lg w-full max-w-md" @click.away="open = false">
          <h3 class="text-2xl font-bold mb-4 text-center">Tambah Testimoni</h3>
          <form action="{{ route('testimoni.store')}}" method="POST">
            @csrf
            <div class="mb-4">
              <label for="nama" class="block text-gray-700">Nama</label>
              <input type="text" name="nama" id="nama" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
              <label for="ulasan" class="block text-gray-700">Testimoni</label>
              <textarea name="ulasan" id="ulasan" class="w-full border rounded px-3 py-2" required></textarea>
            </div>
            <div class="flex justify-end">
              <button type="button" @click="open = false" class="mr-2 px-4 py-2 border rounded">
                Batal
              </button>
              <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                Kirim
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <!-- Judul Section -->
      <h2 class="text-4xl font-bold text-blue-600 text-center mb-12">
        Tentang Sabiru Market
      </h2>
      <!-- Grid Layout -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Kolom Kiri: Gambar dengan Icon di Belakang -->
        <div class="relative">
          <!-- Icon Kotak di Kiri Atas -->
          <div class="absolute -top-6 -left-6 w-24 h-24 border-4 border-blue-500 rounded-2xl z-0"></div>
          <!-- Icon Kotak di Kanan Bawah -->
          <div class="absolute -bottom-6 -right-6 w-24 h-24 border-4 border-blue-500 rounded-2xl z-0"></div>
          <!-- Gambar -->
          <img src="{{ asset('images/bgabout.jpg') }}" alt="About Sabiru Market" class="rounded-2xl shadow-lg relative z-10">
        </div>
        <!-- Kolom Kanan: Konten Teks -->
        <div class="space-y-6">
          <!-- Icon dan Teks -->
          <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-blue-600">Pengalaman Kuliner Terbaik</h3>
              <p class="text-gray-700 mt-2">
                Kami menyajikan hidangan dengan bahan-bahan premium dan resep autentik untuk memastikan kepuasan pelanggan.
              </p>
            </div>
          </div>
          <!-- Icon dan Teks -->
          <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-blue-600">Kualitas Terjamin</h3>
              <p class="text-gray-700 mt-2">
                Setiap produk kami melalui proses seleksi ketat untuk menjaga kualitas dan rasa yang konsisten.
              </p>
            </div>
          </div>
          <!-- Icon dan Teks -->
          <div class="flex items-start space-x-4">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
              <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-blue-600">Pelayanan Ramah</h3>
              <p class="text-gray-700 mt-2">
                Tim kami selalu siap memberikan pelayanan terbaik dengan senyuman dan keramahan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  
@endsection
