@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <!-- Slider Section -->
  <section class="bg-white pt-0 pb-0">
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
            <!-- Slide 3 -->
            <div class="swiper-slide">
              <img src="{{ asset('images/slide3.jpg') }}" alt="Slide 3" class="w-full h-auto object-cover">
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide">
              <img src="{{ asset('images/slide4.jpg') }}" alt="Slide 4" class="w-full h-auto object-cover">
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
<section class="container mx-auto" style="background: url('{{ asset('images/oishi-background.png') }}') no-repeat center center fixed; background-size: cover;">
  <!-- Judul (ditengah) -->
  <h2 class="text-3xl font-bold text-blue-500 mb-6 text-center pt-8">
    <span class="bg--500 text-black px-4 py-2 inline-block rounded-full">
      Menu Populer
    </span>
  </h2>
  <!-- Grid Produk -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 justify-items-center">
    @foreach($products as $product)
      <a href="{{ route('product.show', $product->id) }}" class="block w-full max-w-xs">
        <div class="bg-white rounded-xl p-4 text-gray-800 shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
          <div class="flex justify-center mt-2">
            <img src="{{ asset('uploads/' . $product->gambar) }}" alt="{{ $product->nama_produk }}" class="w-40 h-40 object-contain transition-transform duration-300 transform hover:scale-110"/>
          </div>
          <h3 class="text-lg font-bold mt-4 tracking-wide text-center">
            {{ $product->nama_produk }}
          </h3>
        </div>
      </a>
    @endforeach
  </div>
  <div class="text-center pb-8">
    <a href="{{ route('product.index') }}" class="bg-blue-500 text-white px-6 py-3 rounded-full hover:bg-blue-600 transition duration-300 inline-block text-lg font-semibold">
      Menu Lengkap
    </a>
  </div>
</section>




<!-- Testimoni Section dengan jarak tambahan -->
<section class="py-16 mt-15" style="background: url('{{ asset('images/oishi-background.png') }}') no-repeat center center fixed, #98c0f4; background-size: cover;">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-12 text-black-600">
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
      </div>
      
      <!-- Testimoni 2 -->
      <div class="bg-white p-8 rounded-2xl shadow-md relative transition-transform duration-300 hover:scale-105">
        <!-- Foto Profil -->
        <div class="w-16 h-16 rounded-full overflow-hidden absolute -top-8 left-6">
          <img src="{{ asset('images/pp1.jpeg') }}" alt="Foto Profil Rina" class="w-full h-full object-cover">
        </div>
        <!-- Konten Testimoni -->
        <div class="mt-10">
          <p class="text-gray-700 italic text-lg">
            "Pengalaman makan di Sabiru Market selalu menyenangkan. Setiap produk terasa istimewa dan pelayanannya sangat ramah."
          </p>
          <p class="mt-6 text-right text-gray-600 font-semibold">
            - Rina
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-16" style="background: url('{{ asset('images/oishi-background.png') }}') no-repeat center center fixed; background-size: cover;">
  <div class="container mx-auto px-4">
    <!-- Bagian judul utama (opsional) -->
    <!--
    <h2 class="text-4xl font-bold text-center text-blue-600 mb-10">
      Tentang Kami
    </h2>
    -->

    <!-- Grid: 2 kolom (gambar kiri, teks kanan) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <!-- Kolom Gambar -->
      <div class="flex justify-center md:justify-end">
        <img
          src="{{ asset('images/tnt.jpg') }}"
          alt="Hidangan Terbaik"
          class="w-full md:w-4/5 rounded-xl shadow-lg"
        />
      </div>

      <!-- Kolom Teks -->
      <div class="space-y-6">
        <h3 class="text-3xl md:text-4xl font-bold text-gray-800">
          Hidangan Terbaik di Lokasi Pilihan
        </h3>
        <p class="text-gray-600 leading-relaxed">
          Kami menghadirkan beragam hidangan istimewa yang disajikan
          secara profesional. Menggunakan bahan-bahan segar dan berkualitas,
          kami berkomitmen memberikan pengalaman kuliner yang tidak terlupakan.
        </p>
        <p class="text-gray-600 leading-relaxed">
          Tentang kami? Ganti saja teks ini dengan deskripsi
          perusahaan atau usaha Anda. Tambahkan pula keunggulan dan
          nilai unik yang Anda tawarkan, sehingga pelanggan
          semakin percaya dan tertarik untuk mencoba.
        </p>
        <!-- Tombol CTA (opsional) -->
        <a
          href="{{ route('product.index') }}"
          class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-blue-700 transition-colors"
        >
          Pesan Sekarang
        </a>
      </div>
    </div>
  </div>
</section>



  
@endsection
