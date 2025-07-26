<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReportIt</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#fefaf4] font-sans text-gray-800">
    <header class="bg-[#2f4a2f] text-white px-6 py-4 flex flex-col md:flex-row items-center justify-between">
        <div class="text-xl font-bold">ReportIt</div>
        <nav class="flex gap-6 mt-2 md:mt-0">
            <a href="#" class="hover:underline">Home</a>
            <a href="#" class="hover:underline">About</a>
            <a href="#" class="hover:underline">Reports</a>
            <a href="#" class="hover:underline">Contact</a>
        </nav>
        <div class="flex gap-3 mt-3 md:mt-0">
            <a href="#" class="bg-[#d5731d] text-white px-4 py-2 rounded hover:opacity-90">Staff</a>
            <a href="{{ route('login') }}" class="bg-[#d5731d] text-white px-4 py-2 rounded hover:opacity-90">Login</a>
            <a href="{{ route('register') }}" class="bg-[#d5731d] text-white px-4 py-2 rounded hover:opacity-90">Register</a>
        </div>
    </header>

    <section class="text-center">
        <img src="{{ asset('images/hands.jpg') }}" alt="Hands together" class="w-full h-72 object-cover">
        <div class="bg-[#eaa355] py-10 px-4">
            <h1 class="text-white text-2xl md:text-4xl font-bold mb-2">Community Reporting Made Easy</h1>
            <p class="text-white text-lg mb-6">Report local issues and make a difference in your community.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-[#2f4a2f] text-white px-6 py-3 rounded font-semibold hover:opacity-90">Report an Issue</a>
                <a href="#" class="bg-[#fdf6e3] text-gray-800 px-6 py-3 rounded font-semibold border border-gray-300 hover:opacity-90">View Reports</a>
                <a href="#" class="bg-[#d5731d] text-white px-6 py-3 rounded font-semibold hover:opacity-90">Learn More</a>
            </div>
        </div>
    </section>

    <footer class="bg-[#fdf6e3] text-sm flex justify-between px-6 py-4">
        <a href="#" class="text-gray-700 hover:underline">Privacy Policy</a>
        <a href="#" class="text-gray-700 hover:underline">Terms of Service</a>
    </footer>
</body>
</html>
