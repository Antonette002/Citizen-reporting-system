<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submitted Reports</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <main class="p-6 max-w-5xl mx-auto">
    <h2 class="text-3xl font-semibold text-[#0b3d0b] mb-6">Your Submitted Reports</h2>

    <div class="grid gap-6">

      <!-- Report 1 -->
      <div class="bg-white rounded-2xl shadow border border-gray-200 p-6">
        <div class="flex items-start justify-between">
          <div>
            <h3 class="text-xl font-bold text-[#0b3d0b]">Blocked Drainage</h3>
            <p class="text-gray-600 mt-1">We have a blocked drainage near our house. It's been three days.</p>
            <p class="text-xs text-gray-500 mt-2">Submitted: July 29, 2025, 10:35 AM</p>
          </div>
          <span class="px-3 py-1 text-sm rounded-full bg-yellow-100 text-yellow-800">
            Pending
          </span>
        </div>

        <div class="mt-4">
          <img src="https://via.placeholder.com/300x200" alt="Report Image" class="w-full max-w-sm rounded-lg border">
        </div>

        <p class="mt-3 text-sm text-gray-700">
          <strong>Location:</strong> -15.4140672, 28.3082752
        </p>
      </div>

      <!-- Report 2 -->
      <div class="bg-white rounded-2xl shadow border border-gray-200 p-6">
        <div class="flex items-start justify-between">
          <div>
            <h3 class="text-xl font-bold text-[#0b3d0b]">Garbage</h3>
            <p class="text-gray-600 mt-1">Garbage not collected in over a week.</p>
            <p class="text-xs text-gray-500 mt-2">Submitted: July 25, 2025, 9:10 AM</p>
          </div>
          <span class="px-3 py-1 text-sm rounded-full bg-green-100 text-green-800">
            Resolved
          </span>
        </div>

        <div class="mt-4">
          <img src="https://via.placeholder.com/300x200" alt="Report Image" class="w-full max-w-sm rounded-lg border">
        </div>

        <p class="mt-3 text-sm text-gray-700">
          <strong>Location:</strong> -15.4200101, 28.2999847
        </p>
      </div>

    </div>
  </main>

</body>
</html>
