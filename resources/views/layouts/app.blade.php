<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sabiru Market')</title>
    <!-- Menggunakan Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> 
     <style> body { font-family: 'Poppins', sans-serif; } </style> 
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow">
      <div class="max-w-7xl mx-auto px-4">
          <div class="flex items-center py-4">
              <a href="#" class="text-2xl font-bold text-orange-500">Sabiru Market</a>
              <a href="{{ route('home') }}" class="ml-2 text-gray-700 hover:text-orange-500">Home</a>
              <a href="{{ route('product.index') }}" class="ml-2 text-gray-700 hover:text-orange-500">Produk</a>
          </div>
      </div>
  </nav>
  
  
    <!-- Konten Utama -->
    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-100 mt-12 py-8">
      <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Social Media Section -->
        <div>
          <h3 class="text-lg font-bold text-gray-800">Foodish</h3>
          <p class="text-gray-600 mt-2">Follow Us On</p>
          <div class="flex space-x-4 mt-2">
            <a href="#" class="relative before:hidden hover:before:flex before:justify-center before:items-center before:h-4 before:text-[.6rem] before:px-1 before:content-['Facebook'] before:bg-black dark:before:bg-white dark:before:text-black before:text-white before:bg-opacity-50 before:absolute before:-top-7 before:rounded-lg hover:-translate-y-5 cursor-pointer hover:scale-125 bg-white dark:bg-[#191818] rounded-full p-2 px-3">
              <i class="fab fa-facebook-f text-blue-600"></i>
            </a>
            <a href="#" class="relative before:hidden hover:before:flex before:justify-center before:items-center before:h-4 before:text-[.6rem] before:px-1 before:content-['Twitter'] before:bg-black dark:before:bg-white dark:before:text-black before:text-white before:bg-opacity-50 before:absolute before:-top-7 before:rounded-lg hover:-translate-y-5 cursor-pointer hover:scale-125 bg-white dark:bg-[#191818] rounded-full p-2 px-3">
              <i class="fab fa-twitter text-blue-400"></i>
            </a>
            <a href="#" class="relative before:hidden hover:before:flex before:justify-center before:items-center before:h-4 before:text-[.6rem] before:px-1 before:content-['Instagram'] before:bg-black dark:before:bg-white dark:before:text-black before:text-white before:bg-opacity-50 before:absolute before:-top-7 before:rounded-lg hover:-translate-y-5 cursor-pointer hover:scale-125 bg-white dark:bg-[#191818] rounded-full p-2 px-3">
              <i class="fab fa-instagram text-pink-500"></i>
            </a>
          </div>
        </div>
    
        <!-- Menu Section -->
        <div>
          <h3 class="text-lg font-bold text-gray-800">Menu</h3>
          <ul class="text-gray-600 mt-2 space-y-2">
            <li><a class="hover:text-red-500" href="#">Home</a></li>
            <li><a class="hover:text-red-500" href="#">Services</a></li>
            <li><a class="hover:text-red-500" href="#">Produk</a></li>
          </ul>
        </div>
    
        <!-- Information Section -->
        <div>
          <h3 class="text-lg font-bold text-gray-800">Information</h3>
          <ul class="text-gray-600 mt-2 space-y-2">
            <li><a class="hover:text-red-500" href="#">Contact Us</a></li>
            <li><a class="hover:text-red-500" href="#">Privacy Policy</a></li>
            <li><a class="hover:text-red-500" href="#">Terms & Conditions</a></li>
          </ul>
        </div>
    
        <!-- Contact Section -->
        <div>
          <h3 class="text-lg font-bold text-gray-800">Contact</h3>
          <ul class="text-gray-600 mt-2 space-y-2">
            <li>123 Sabiru St.</li>
            <li>New York, NY 10001</li>
            <li>Phone: (123) 456-7890</li>
            <li>Email: info@sabirufood.com</li>
          </ul>
        </div>
      </div>
    </footer>
</body>
</html>
