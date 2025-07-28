<x-app-layout>
    <div class="flex min-h-screen">
<!-- Sidebar -->
        <div class="w-64 bg-[#0b3d0b] text-white p-4 flex-shrink-0 space-y-6">
            <!-- App Title -->
            <div class="text-2xl font-bold">ReportIt</div>

            <!-- Navigation -->
            <nav class="space-y-6">
                <!-- My Reports with Dropdown -->
               <div x-data="{ open: false }" class="space-y-1">
    <button @click="open = !open" class="w-full text-left mb-4 px-4 py-2 rounded-lg bg-[#145214] hover:bg-[#196c1f] transition">
        My Reports
        <span class="float-right" x-text="open ? '▲' : '▼'"></span>
    </button>
    <div x-show="open" class="pl-6 mt-1 space-y-1 text-sm text-white">
        <a href="#" class="block hover:underline">All Reports</a>
        <a href="#" class="block hover:underline">Pending</a>
        <a href="#" class="block hover:underline">Resolved</a>
    </div>
</div>


<a href="#" class="w-full text-left px-4 py-2 rounded-lg bg-[#145214] hover:bg-[#196c1f] transition mt-6">
    Find out about Councillor
</a>


            <!-- How to Report Demo -->
            <div class="bg-[#145214] rounded-xl p-4 space-y-4 mt-6">
                <h3 class="text-lg font-semibold">How to Report</h3>

                <!-- Step 1 -->
                <div class="flex items-center gap-3">
                    <div class="bg-[#ffcc80] p-2 rounded-lg">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5l4 4-9.5 9.5H7.5v-4L16.5 3.5z"></path>
                        </svg>
                    </div>
                    <span>Describe the issue</span>
                </div>

                <!-- Step 2 -->
                <div class="flex items-center gap-3">
                    <div class="bg-[#ffcc80] p-2 rounded-lg">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"></path>
                            <circle cx="12" cy="9" r="2.5" />
                        </svg>
                    </div>
                    <span>Provide location</span>
                </div>

                <!-- Step 3 -->
                <div class="flex items-center gap-3">
                    <div class="bg-[#ffcc80] p-2 rounded-lg">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 7h4l2-3h6l2 3h4v13H3V7z"></path>
                            <circle cx="12" cy="13" r="4" />
                        </svg>
                    </div>
                    <span>Upload a photo</span>
                </div>

                <!-- Step 4 -->
                <div class="flex items-center gap-3">
                    <div class="bg-[#ffcc80] p-2 rounded-lg">
                        <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <span>Submit your report</span>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1 p-4">
            <div class="bg-[#fdf7ec] p-6 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold text-[#0b3d0b] mb-4">Reports Overview</h2>
    <canvas id="reportPieChart" width="600" height="600"></canvas>
</div>
        </main>

        <!-- Aside -->
        <aside class="w-80 p-6 border-l">
            {{-- Aside content goes here --}}
        </aside>
    </div>

    <!--pie chart-->
 @push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        fetch("{{ route('report.stats') }}")
            .then(res => {
                if (!res.ok) {
                    throw new Error(`HTTP error! status: ${res.status}`);
                }
                return res.json();
            })
            .then(data => {
                console.log("Fetched Data:", data); 

                const ctx = document.getElementById('reportPieChart')?.getContext('2d');
                if (!ctx) {
                    console.error("Canvas with ID 'reportPieChart' not found.");
                    return;
                }

                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: Object.keys(data),
                        datasets: [{
                            data: Object.values(data),
                            backgroundColor: [
                                '#ff6600', '#0b3d0b', '#145214',
                                '#f5a623', '#d35400', '#27ae60',
                                '#16a085', '#7f8c8d',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: false,
                        plugins: {
                            legend: { position: 'right' },
                            tooltip: {
                                callbacks: {
                                    label: ctx => `${ctx.label}: ${ctx.parsed} reports`
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => {
                console.error("Pie Chart Fetch/Render Error:", error); 
            });
    });
</script>
@endpush



   
</x-app-layout>


