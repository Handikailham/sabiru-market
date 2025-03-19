<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CDN Tailwind -->
  <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
    rel="stylesheet"
  />
  <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
    integrity="sha512-..." 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
  />
  <title>Burger Website</title>
</head>
<body class="bg-white text-gray-700">
  <!-- Header / Navbar -->
  <header class="w-full bg-white shadow-sm">
    <div class="container mx-auto px-4 py-4 flex items-center justify-center gap-16">
      <div class="font-bold text-2xl text-blue-500">
        <a href="{{ route('index') }}">Sabiru Market</a>
      </div>
      <nav class="flex items-center gap-10">
        <ul class="flex space-x-10">
          <li class="font-bold text-xl">
            <a href="{{ route('index') }}" class="hover:text-blue-500">Home</a>
          </li>
          <li class="font-bold text-xl">
            <a href="{{ route('product.index') }}" class="hover:text-blue-500">Menu</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  
  <!-- Konten utama dari masing-masing halaman -->
  @yield('content')

  <!-- Divider dengan border biru -->
  

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-6 lg:px-12">
      <!-- Bagian Atas: Info Brand, Navigasi & Sosial Media -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Kolom 1: Info Brand -->
        <div>
          <h3 class="text-3xl font-bold text-white">Sabiru Market</h3>
          <p class="text-gray-400 mt-2">Nikmati menu terbaik dengan cita rasa yang tak terlupakan.</p>
          <div class="mt-4 space-y-1 text-gray-400">
            <p><strong>Alamat:</strong> Jl. Contoh No. 123, Kota Contoh, Indonesia</p>
            <p><strong>Telepon:</strong> +62 882 3971 5035</p>
            <p><strong>Email:</strong> info@burgerbrand.com</p>
          </div>
        </div>
  
        <!-- Kolom 2: Navigasi -->
        <div class="md:text-center">
          <h4 class="text-2xl font-semibold text-white">Navigasi</h4>
          <ul class="mt-4 space-y-2">
            <li><a href="{{ route('index') }}" class="text-gray-400 hover:text-white transition">Beranda</a></li>
            <li><a href="{{ route('product.index') }}" class="text-gray-400 hover:text-white transition">Menu</a></li>
          </ul>
        </div>
  
        <!-- Kolom 3: Sosial Media -->
        <div class="md:text-right">
          <h4 class="text-2xl font-semibold text-white">Ikuti Kami</h4>
          <div class="mt-4 flex md:justify-end space-x-4">
            <!-- WhatsApp -->
            <a href="https://wa.me/6288239715035" target="_blank" class="text-green-500 hover:text-green-400 transition">
              <i class="fab fa-whatsapp text-3xl"></i>
            </a>
            <!-- Instagram -->
            <a href="#" target="_blank" class="text-pink-500 hover:text-pink-400 transition">
              <i class="fab fa-instagram text-3xl"></i>
            </a>
            <!-- Twitter (X) -->
            <a href="#" target="_blank" class="text-gray-400 hover:text-blue-400 transition">
              <i class="fab fa-x-twitter text-3xl"></i>
            </a>
          </div>
        </div>
      </div>
  
      <!-- Garis Pembatas -->
      <div class="mt-8 border-t border-gray-700 pt-6 text-center">
        <p class="text-gray-400 text-sm">&copy; 2025 Sabiru Market. All rights reserved.</p>
      </div>
    </div>
  </footer>
  
  <!-- Tambahkan FontAwesome untuk ikon sosial media -->
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

</body>
</html>