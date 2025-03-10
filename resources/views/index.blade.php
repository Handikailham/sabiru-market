@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="bg-white py-10 md:py-16">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-6">
      <!-- Kolom Teks (Lebar 1/3) -->
      <div class="w-full md:w-1/3 flex flex-col items-start text-left pl-4 md:pl-0">
        <!-- Ornamen Dekorasi SVG Berwarna Biru -->
        <div class="mb-6 w-full">
          <svg class="w-full h-20" viewBox="0 0 600 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="ornamentGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#3B82F6" />
                <stop offset="100%" stop-color="#60A5FA" />
              </linearGradient>
            </defs>
            <!-- Bentuk pita abstrak dengan lengkungan -->
            <path fill="url(#ornamentGradient)" d="M0,40 C150,0 450,80 600,40 L600,70 C450,110 150,30 0,70 Z" />
            <!-- Garis aksen untuk menegaskan lengkungan -->
            <path fill="none" stroke="#3B82F6" stroke-width="2" d="M0,40 C150,0 450,80 600,40" />
          </svg>
        </div>
        <h1 class="text-blue-500 text-4xl md:text-5xl font-bold leading-tight">
          SABIRU MARKET
        </h1>
        <p class="mt-4 text-gray-700 text-base md:text-lg max-w-md">
          Selamat datang di Sabiru Market, tempat terbaik untuk menikmati berbagai macam burger lezat dan minuman segar. Temukan cita rasa unik yang memanjakan lidah Anda!
        </p>
        <a href="{{ route('product.index') }}" class="mt-6 px-8 py-4 bg-blue-500 text-white font-semibold rounded-full hover:bg-blue-600 transition duration-300">Order Sekarang</a>
      </div>
      <!-- Kolom Gambar (Lebar 2/3) -->
      <div class="w-full md:w-2/3 flex justify-center">
        <img src="{{ asset('images/hero.png') }}" alt="Burger Image" class="w-full h-auto object-cover">
      </div>
    </div>
  </section>
  
  
 <!-- About Us Section -->
<section class="py-16 bg-blue-500">
  <div class="container mx-auto px-4">
    <!-- Kotak putih tanpa efek miring -->
    <div class="relative bg-white rounded-lg shadow-xl p-8 md:p-12">
      <!-- Konten Teks -->
      <div>
        <h2 class="text-3xl md:text-4xl font-bold text-blue-500 mb-4">Tentang Kami</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
          Sabiru Market didirikan dengan semangat untuk menghadirkan pengalaman kuliner yang berbeda. Kami menyediakan berbagai macam burger dengan resep istimewa dan pilihan minuman yang menyegarkan, sehingga setiap kunjungan Anda menjadi pengalaman yang tak terlupakan.
        </p>
       
      </div>
      <!-- Gambar ditempatkan di pojok kanan -->
      <div class="absolute top-0 right-0 m-4 w-20 h-20">
        <img src="{{ asset('images/sabiruicon.png') }}" alt="Tentang Kami" class="w-full h-full object-cover rounded-lg">
      </div>
      <!-- Dekorasi tambahan: garis tipis di bagian bawah kotak -->
      <div class="absolute bottom-0 left-0 w-full">
        <hr class="border-t-2 border-blue-500">
      </div>
    </div>
  </div>
</section>


<!-- Produk Terpopuler Section dengan jarak atas yang lebih lebar -->

<section class="py-16 container mx-auto px-4 mt-20">
  <!-- Header Judul: Background hanya sepanjang teks dengan border rounded -->
  <h2 class="text-3xl font-bold text-blue-500 mb-6">
    <span class="bg-blue-500 text-white px-4 py-2 inline-block rounded-full">Menu Populer</span>
  </h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
  @foreach($products as $product)
  <a href="{{ route('product.show', $product->id) }}" class="block">
    <div class="bg-white rounded-xl p-4 relative text-gray-800 shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
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


  
@endsection
