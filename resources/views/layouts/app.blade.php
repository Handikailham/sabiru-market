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
        Sabiru Market
      </div>
      <nav class="flex items-center gap-10">
        <ul class="flex space-x-10">
          <li class="font-bold text-xl">
            <a href="{{ route('index') }}" class="hover:text-blue-500">Home</a>
          </li>
          <li class="font-bold text-xl">
            <a href="{{ route('product.index') }}" class="hover:text-blue-500">Menu</a>
          </li>
          <li class="font-bold text-xl">
            <a href="#" class="hover:text-blue-500">Specials</a>
          </li>
          <li class="font-bold text-xl">
            <a href="#" class="hover:text-blue-500">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  
  
  
  

  <!-- Konten utama dari masing-masing halaman -->
  @yield('content')

  <!-- Footer -->
  <footer class="bg-blue-600 py-10">
    <div class="container mx-auto px-4">
      <!-- Atas: Info Brand & Navigasi -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Kolom Kiri: Info Brand -->
        <div>
          <h3 class="text-3xl font-bold text-white">Sabiru Market</h3>
          <p class="text-blue-200 mt-2">Nikmati burger terbaik dengan cita rasa yang tak terlupakan.</p>
          <div class="mt-4 space-y-1">
            <p class="text-blue-200"><strong>Alamat:</strong> Jl. Contoh No. 123, Kota Contoh, Indonesia</p>
            <p class="text-blue-200"><strong>Telepon:</strong> +62 812 3456 7890</p>
            <p class="text-blue-200"><strong>Email:</strong> info@burgerbrand.com</p>
          </div>
        </div>
        <!-- Kolom Kanan: Navigasi -->
        <div class="md:text-right">
          <h4 class="text-2xl font-semibold text-white">Navigasi</h4>
          <ul class="mt-4 space-y-2">
            <li><a href="#home" class="text-blue-200 hover:text-white transition">Beranda</a></li>
            <li><a href="#menu" class="text-blue-200 hover:text-white transition">Menu</a></li>
            <li><a href="#about" class="text-blue-200 hover:text-white transition">Tentang Kami</a></li>
            <li><a href="#contact" class="text-blue-200 hover:text-white transition">Kontak</a></li>
          </ul>
        </div>
      </div>
      <!-- Sosial Media -->
      <div class="mt-10 border-t border-blue-500 pt-6">
        <div class="flex flex-col md:flex-row md:justify-center items-center space-y-4 md:space-y-0 md:space-x-12">
          <!-- WhatsApp -->
          <div class="flex flex-col items-center">
            <a href="https://wa.me/6281234567890" target="_blank" aria-label="WhatsApp" class="text-white hover:text-blue-200 transition">
              <svg class="w-8 h-8 fill-current" viewBox="0 0 448 512">
                <path d="M380.9 97.1C339 55.2 282.6 32 224 32 100.3 32 0 132.3 0 256c0 45.3 12 87.6 34.8 125.5L0 480l100.1-34.5C136.4 468 178.3 480 224 480c123.7 0 224-100.3 224-224 0-58.6-23.2-115-66.1-158.9zM224 439c-39.8 0-78.7-10.3-112.4-29.9l-7.9-4.7-59.3 20.4 20.1-57.9-5.1-8.3C59.5 337.1 48 298.4 48 256 48 148.8 148.8 48 256 48c57.6 0 111 22.4 151.2 63.2C447.9 148.5 464 202 464 256c0 107.2-100.8 207-240 207z"/>
              </svg>
            </a>
            <span class="text-blue-200 text-sm mt-1">WhatsApp</span>
          </div>
          <!-- Instagram -->
          <div class="flex flex-col items-center">
            <a href="https://instagram.com/yourhandle" target="_blank" aria-label="Instagram" class="text-white hover:text-blue-200 transition">
              <svg class="w-8 h-8 fill-current" viewBox="0 0 448 512">
                <path d="M224,2.163c3.204,0,3.584.012,4.85.07,1.366.062,2.633.332,3.608,1.308.975.975,1.246,2.242,1.308,3.608.058,1.266.07,1.645.07,4.85s-.012,3.584-.07,4.85c-.062,1.366-.333,2.633-1.308,3.608-.975.975-2.242,1.246-3.608,1.308-1.266.058-1.645.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.333-3.608-1.308-.975-.975-1.246-2.242-1.308-3.608C2.175,15.747,2.163,15.368,2.163,12s.012-3.584.07-4.85c.062-1.366.333-2.633,1.308-3.608C7.517,2.495,8.784,2.224,10.15,2.163,11.416,2.105,11.796,2.163,15,2.163,18.26,2.163,18.669,2.105,22,2.163ZM224,80.163A143.84,143.84,0,1,0,367.84,224,143.86,143.86,0,0,0,224,80.163Zm0,237.633A93.793,93.793,0,1,1,317.793,224,93.8,93.8,0,0,1,224,317.793Zm146.406-194.406a33.15,33.15,0,1,1-33.15-33.15A33.151,33.151,0,0,1,370.406,123.387Z"/>
              </svg>
            </a>
            <span class="text-blue-200 text-sm mt-1">Instagram</span>
          </div>
          <!-- X (Twitter) -->
          <div class="flex flex-col items-center">
            <a href="https://x.com/yourhandle" target="_blank" aria-label="X" class="text-white hover:text-blue-200 transition">
              <svg class="w-8 h-8 fill-current" viewBox="0 0 512 512">
                <path d="M459.4 151.7c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.299 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
              </svg>
            </a>
            <span class="text-blue-200 text-sm mt-1">X</span>
          </div>
        </div>
      </div>
      <!-- Bawah: Copyright -->
      <div class="mt-8 border-t border-blue-500 pt-4 text-center">
        <p class="text-blue-200 text-sm">&copy; 2025 BurgerBrand. All rights reserved.</p>
      </div>
    </div>
  </footer>
  
</body>
</html>
