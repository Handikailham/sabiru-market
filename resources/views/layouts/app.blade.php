<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Shop')</title>
    <!-- Contoh menggunakan Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">My Shop</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
         <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">Produk</a>
         </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="bg-dark text-white py-3 mt-5">
    <div class="container text-center">
        <p>&copy; {{ date('Y') }} Sabiru Market. Kontak: Email - info@tokokami.com, Telp - 0123-456789</p>
    </div>
</footer>

</body>
</html>
