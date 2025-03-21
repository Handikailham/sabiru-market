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
    <a href="{{ route('product.index') }}" class="bg-blue-500 text-white px-6 py-3 mt-5 rounded-full hover:bg-blue-600 transition duration-300 inline-block text-lg font-semibold">
      Menu Lengkap
    </a>
  </div>
</section>



<!-- Testimoni Section dengan jarak tambahan -->
<section class="py-16 bg-blue-50 mt-15" x-data="{ open: false }">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-12 text-blue-600">
      Testimoni Pelanggan
    </h2>

    <!-- Container Testimoni -->
    <div 
      id="testimoniContainer"
      class="flex flex-nowrap gap-12 
             overflow-x-auto overflow-y-visible 
             pb-4 pl-4 no-scrollbar 
             scroll-smooth scroll-snap-x mandatory"
      style="scroll-behavior: smooth;"
    >
      @php
        $ulasans = \App\Models\Ulasan::all();
      @endphp
      @foreach($ulasans as $ulasan)
      <!-- Card Testimoni -->
      <div 
        class="bg-white p-8 rounded-2xl shadow-md relative 
               transition-transform duration-300 hover:scale-105 
               flex-shrink-0 mt-8 w-1/2 
               scroll-snap-align start"
      >
        <!-- Foto Profil -->
        <div class="w-16 h-16 rounded-full overflow-hidden absolute -top-8 left-6">
          @if($ulasan->profile)
            <img 
              src="{{ asset('profile/' . $ulasan->profile) }}" 
              alt="Foto Profil {{ $ulasan->nama }}" 
              class="w-full h-full object-cover"
            >
          @else
            <img 
              src="{{ asset('images/default-profile.png') }}" 
              alt="Foto Profil Default" 
              class="w-full h-full object-cover"
            >
          @endif
        </div>

        <!-- Konten Ulasan -->
        <div class="mt-10">
          <p class="text-gray-700 italic text-lg">
            "{{ $ulasan->ulasan }}"
          </p>
          <p class="mt-6 text-right text-gray-600 font-semibold">
            - {{ $ulasan->nama }}
          </p>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Pesan Ajakan Ulasan -->
    <div class="text-center mt-8">
      <p class="mb-4 text-lg text-blue-600 font-medium">
        Punya pengalaman menarik di sini? Ayo berikan ulasan Anda!
      </p>
      <!-- Tombol untuk Tambah Testimoni -->
      <button 
        @click="open = true" 
        class="bg-blue-500 text-white px-6 py-3 rounded-full 
               hover:bg-blue-600 transition duration-300 
               inline-block text-lg font-semibold"
      >
        Tambah Testimoni
      </button>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      @if(session('success'))
  <script>
    Swal.fire({
      title: "Berhasil!",
      text: "{{ session('success') }}",
      icon: "success",
      confirmButtonText: "OK",
      timer: 3000,
      showConfirmButton: false
    });
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
  </div>
</section>

<!-- JavaScript untuk Memastikan Halaman Dibuka dalam Posisi Awal -->
<script>
  window.onload = function() {
    document.getElementById('testimoniContainer').scrollLeft = 0;
  };
</script>

<!-- CSS untuk Scroll Smooth dan Snap -->
<style>
  /* Hilangkan scrollbar di Chrome, Safari, dan Edge Chromium */
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }
  /* Hilangkan scrollbar di Firefox */
  .no-scrollbar {
    -ms-overflow-style: none;  /* IE 10+ */
    scrollbar-width: none;     /* Firefox */
  }
  /* Snap Scroll */
  .scroll-snap-x {
    scroll-snap-type: x mandatory;
  }
  .scroll-snap-align {
    scroll-snap-align: start;
  }
</style>


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
