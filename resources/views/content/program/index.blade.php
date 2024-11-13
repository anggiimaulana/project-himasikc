@extends('content.main')
@section('title', $title)
@section('data')
    <section class="py-12 bg-white sm:py-16 lg:py-10">
        <div class="px-6 sm:px-10 lg:px-16 mx-auto">
            <div class="max-w-md mx-auto text-center mb-8">
                <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">PROGRAM KERJA</h1>
                <p class="text-base font-semibold leading-7 text-gray-600">Himpunan Mahasiswa Sistem Informasi Kota Cerdas
                </p>
            </div>

            {{-- Tabs Navigation --}}
            <div class="flex justify-center mt-6 space-x-4 border-b pb-2">
                <button onclick="showTab('tab1')" id="tabButton1"
                    class="tab-button py-2 text-gray-600 text-sm md:text-base lg:text-lg focus:outline-none">SEMUA</button>
                <button onclick="showTab('tab2')" id="tabButton2"
                    class="tab-button py-2 text-gray-600 text-sm md:text-base lg:text-lg focus:outline-none">PSDM</button>
                <button onclick="showTab('tab3')" id="tabButton3"
                    class="tab-button py-2 text-gray-600 text-sm md:text-base lg:text-lg focus:outline-none">HUMAS</button>
                <button onclick="showTab('tab4')" id="tabButton4"
                    class="tab-button py-2 text-gray-600 text-sm md:text-base lg:text-lg focus:outline-none">MULTIMEDIA</button>
                <button onclick="showTab('tab5')" id="tabButton5"
                    class="tab-button py-2 text-gray-600 text-sm md:text-base lg:text-lg focus:outline-none">LITBANG</button>
            </div>

            <div id="tab1" class="tab-content mt-6">
                <div class="sm:px-2 lg:px-10">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <!-- Card Example -->
                        @foreach (range(1, 8) as $i)
                            <div class="bg-gray-100 rounded-lg p-4 shadow-lg">
                                <img src="{{ asset('assets/logo-himasikc.jpg') }}" alt="Logo"
                                    class="w-full h-50 object-cover rounded-t-lg">
                                <div class="mt-4">
                                    <h1 class="text-black text-2xl font-bold">SSI</h1>
                                    <p class="text-gray-600 text-base mt-2">Program Kerja: <span
                                            class="text-blue-400">PSDM</span></p>
                                    <p class="text-gray-600 text-base mt-2">Februari - November 2024</p>
                                    <div class="flex items-center mt-2">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                        <p class="text-gray-600 text-base">Sedang Berjalan</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="tab2" class="tab-content hidden mt-6">
                <p>Content for PSDM.</p>
            </div>
            <div id="tab3" class="tab-content hidden mt-6">
                <p>Content for HUMAS.</p>
            </div>
            <div id="tab4" class="tab-content hidden mt-6">
                <p>Content for MULTIMEDIA.</p>
            </div>
            <div id="tab5" class="tab-content hidden mt-6">
                <p>Content for LITBANG.</p>
            </div>
        </div>
    </section>

    <script>
        function showTab(tabId) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));

            // Remove active styling from all tabs
            document.querySelectorAll('.border-b-2').forEach(tab => tab.classList.remove('border-b-2', 'border-blue-600',
                'text-blue-600'));

            // Show the selected tab content and add active styling
            document.getElementById(tabId).classList.remove('hidden');
            document.querySelector(`[onclick="showTab('${tabId}')"]`).classList.add('border-b-2', 'border-blue-600',
                'text-blue-600');
        }

        // Set default active tab
        document.addEventListener('DOMContentLoaded', () => {
            showTab('tab1');
        });
    </script>
@endsection
