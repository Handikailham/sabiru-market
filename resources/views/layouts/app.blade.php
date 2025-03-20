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
  <header class="fixed top-0 left-0 w-full h-20 bg-white shadow-sm z-50 flex items-center">
    <div class="container mx-auto px-4 flex items-center justify-center gap-16">
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
  <main class="pt-20">
    @yield('content')
  </main>
  
  <!-- Divider dengan border biru -->
  <a
  id="whatsapp-btn"
  href="https://wa.me/your_number"
  target="_blank"
  class="fixed right-4 z-50"
  style="bottom: 20px;"
>
  <div class="w-16 h-16 bg-green-500 rounded-full shadow-lg flex items-center justify-center">
    <svg class="w-8 h-8 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path d="M380.9 97.1C339.6 55.7 282.2 32 222.4 32 100.3 32 0 132.3 0 254.4c0 45.2 12 89.6 34.7 128.8L0 480l99.9-33.2c38.3 20.8 81.8 31.8 123.8 31.8 122.1 0 222.4-100.3 222.4-222.4 0-59.8-23.7-117.2-65.5-159.2zM222.4 439c-35.7 0-70.4-9.7-100.4-27.9l-7.2-4.3-59.3 19.7 19.8-58.1-4.7-7.4c-18.7-29.3-28.6-64.3-28.6-100.8 0-107.9 87.8-195.6 195.6-195.6 52.3 0 101.5 20.4 138.5 57.3 36.9 36.9 57.3 86.2 57.3 138.5 0 107.9-87.7 195.6-195.6 195.6zm101.5-138.6c-5.6-2.8-33.1-16.4-38.2-18.3-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18.3-17.5 22.1-3.2 3.7-6.4 4.2-11.9 1.4-33.1-16.4-54.8-29.2-76.9-66.2-5.8-10 5.8-9.3 16.4-30.8 1.8-3.7.9-6.9-0.5-9.7-1.4-2.8-12.5-30.3-17.2-41.6-4.5-10.9-9.1-9.4-12.5-9.6-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3s19.9 53.6 22.6 57.3c2.8 5.6 39.8 60.8 96.6 85.3 13.5 5.8 24.1 9.3 32.3 11.9 13.5 4.3 25.8 3.7 35.6 2.3 10.8-1.6 33.1-13.5 37.8-26.5 4.7-13.2 4.7-24.6 3.3-26.5-1.3-1.9-5-2.8-10.6-5.6z"/>
    </svg>
  </div>
</a>



  
<script>
  document.addEventListener("scroll", function() {
    const whatsappBtn = document.getElementById("whatsapp-btn");
    const footer = document.querySelector("footer");
    const defaultBottom = 20; // jarak default dari bawah saat tidak ada footer
    const footerRect = footer.getBoundingClientRect();

    // Jika footer mulai mendekati (footer top lebih rendah dari viewport height - defaultBottom)
    if (footerRect.top < window.innerHeight - defaultBottom) {
      // Atur bottom supaya logo berhenti 20px di atas footer
      whatsappBtn.style.bottom = (window.innerHeight - footerRect.top + defaultBottom) + "px";
    } else {
      whatsappBtn.style.bottom = defaultBottom + "px";
    }
  });
</script>

  
  

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