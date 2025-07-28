<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ReportIt</title>
  @vite('resources/css/app.css')
</head>
<body class="font-sans text-gray-800 bg-[#fff8ec]">

  <!-- Navbar -->
 <header class="bg-[#1d4a1a] text-white flex items-center justify-between px-6 py-3">
  <div class="text-2xl font-bold">ReportIt</div>

  <nav class="flex items-center space-x-6">
    <!-- Nav Links -->
    <ul class="flex space-x-4 text-sm">
      <li><a href="#" class="hover:text-orange-400">Home</a></li>
      <li><a href="#" class="hover:text-orange-400">About</a></li>
      <li><a href="#" class="hover:text-orange-400">How It Works</a></li>
      <li><a href="#" class="hover:text-orange-400">Contact</a></li>
    </ul>

    <!-- Auth Buttons -->
    <div class="flex space-x-2">
      <a href="{{ route('login') }}" class=" bg-[#F77F00] text-white px-3 py-1.5 rounded font-semibold text-sm hover:bg-orange-200 transition">Login</a>
      <a href="#" class="bg-[#F77F00] text-white px-3 py-1.5 rounded font-semibold text-sm hover:bg-orange-200 transition">Staff</a>
      <a href="{{ route('register') }}" class="bg-[#F77F00] text-white px-3 py-1.5 rounded font-semibold text-sm hover:bg-orange-200 transition">Register</a>
    </div>
  </nav>
</header>


  <!-- Hero Section with Background -->
  <section class="relative bg-cover bg-center min-h-[85vh] flex items-center justify-center px-4" style="background-image: url('{{ asset('images/hands.jpg') }}');">
<!-- Floating Transparent Box (Interactive & Larger) -->
<div class="bg-white/10 backdrop-blur-md rounded-xl shadow-lg p-8 max-w-xl text-center mx-auto">
  <h1 class="text-3xl md:text-4xl font-bold text-[#1d4a1a] mb-4 animate-pulse">Community Reporting Made Easy</h1>
  <p class="text-[#1d4a1a] text-lg mb-6 opacity-80 animate-pulse">Report local issues and make a difference in your community.</p>
  <a href="#" class="inline-block bg-[#d5731d] text-white px-6 py-3 rounded font-semibold hover:opacity-90 transition duration-300">Get Started</a>
</div>


  </section>

  <!-- Footer -->
  <footer class="bg-[#1d4a1a] text-white text-center py-4">
    © 2025 ReportIt Zambia. Built for citizens.
  </footer>

</body>
</html>
