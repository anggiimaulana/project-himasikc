@extends('content.main')
@section('title', $title)
@section('data')
    <section class="py-12 sm:py-16 lg:py-10">
        <div class="pt-16 lg:pt-24 sm:px-10 lg:px-16 mx-auto">
            <div class="max-w-md mx-auto text-center mb-8">
                <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">PROGRAM KERJA</h1>
                <p class="text-base font-semibold leading-7 text-gray-600">Himpunan Mahasiswa Sistem Informasi Kota Cerdas
                </p>
            </div>

            {{-- Tabs --}}
            <div class="flex justify-center mt-6 space-x-3 md:space-x-6 lg:space-x-10 border-b pb-2">
                <button onclick="showTab('tab1')" id="tabButton1"
                    class="tab-button py-2 text-gray-600 text-sm lg:text-base md:text-base focus:outline-none font-bold">SEMUA</button>
                <button onclick="showTab('tab2')" id="tabButton2"
                    class="tab-button py-2 text-gray-600 text-sm lg:text-base md:text-base focus:outline-none font-bold">PSDM</button>
                <button onclick="showTab('tab3')" id="tabButton3"
                    class="tab-button py-2 text-gray-600 text-sm lg:text-base md:text-base focus:outline-none font-bold">HUMAS</button>
                <button onclick="showTab('tab4')" id="tabButton4"
                    class="tab-button py-2 text-gray-600 text-sm lg:text-base md:text-base focus:outline-none font-bold">MULTIMEDIA</button>
                <button onclick="showTab('tab5')" id="tabButton5"
                    class="tab-button py-2 text-gray-600 text-sm lg:text-base md:text-base focus:outline-none font-bold">LITBANG</button>
            </div>

            <div id="tab1" class="tab-content mt-6">
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Event ini merupakan program yang
                            dapat diikuti oleh seluruh anggota HIMA-SIKC. Anggota HIMA-SIKC dapat mengikuti program ini
                            sebagai panitia, peserta, atau lain sebagainya.</p>
                    </div>
                    <div class="overflow-x-auto grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2 lg:gap-4 flex sm:gap-x-4 my-12">
                        @foreach (range(1, 8) as $i)
                            <a href="{{ route('program.detail') }}" class="flex-shrink-0 sm:w-auto">
                                <div class="bg-transparent rounded-lg p-4 shadow-lg hover:shadow-2xl">
                                    <img src="{{ asset('assets/LOGO-HIMA-SIKC FIX.png') }}" alt="Logo" loading="lazy"
                                        class="w-full h-52 object-cover rounded-t-lg lg:p-2">
                                    <div class="mt-4">
                                        <h1
                                            class="text-black sm:text-base md:text-lg lg:text-lg sm:text-semibold font-bold">
                                            ACADEMIC ROOM</h1>
                                        <p class="text-gray-600 md:text-base lg:text-base text-sm mt-2">Program Kerja:
                                            <span
                                                class="text-blue-400 md:text-base lg:text-base text-sm font-semibold">LITBANG</span>
                                        </p>
                                        <p class="text-gray-600 lg:text-base md:text-base text-sm mt-2">September -
                                            November
                                            2024</p>
                                        <div class="flex items-center mt-2">
                                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                            <p class="text-gray-600 text-sm md:text-base lg:text-base">Selesai</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>

                {{-- Non-Event --}}
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 mt-12 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Non-Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Non-event ini merupakan program
                            yang diselenggarakan oleh tiap divisi untuk mengembangkan HIMA-SIKC dalam bentuk program kerja
                            internal HIMA-SIKC.</p>
                    </div>
                    <div class="overflow-x-auto grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2 lg:gap-4 flex sm:gap-x-4">
                        @foreach (range(1, 8) as $i)
                            <a href="{{ route('program.detail') }}" class="flex-shrink-0 sm:w-auto">
                                <div class="bg-transparent rounded-lg p-4 shadow-lg hover:shadow-2xl">
                                    <img src="https://th.bing.com/th/id/OIP.jVfc62FgQkvl2NTax9qFVQHaJW?w=144&h=182&c=7&r=0&o=5&dpr=1.5&pid=1.7"
                                        alt="Logo" loading="lazy" class="w-full h-52 object-cover rounded-t-lg lg:p-2 ">
                                    <div class="mt-4">
                                        <h1
                                            class="text-black sm:text-base md:text-lg lg:text-lg sm:text-semibold font-bold">
                                            ACADEMIC ROOM</h1>
                                        <p class="text-gray-600 md:text-base lg:text-base text-sm mt-2">Program Kerja:
                                            <span
                                                class="text-blue-400 md:text-base lg:text-base text-sm font-semibold">LITBANG</span>
                                        </p>
                                        <p class="text-gray-600 lg:text-base md:text-base text-sm mt-2">September -
                                            November
                                            2024</p>
                                        <div class="flex items-center mt-2">
                                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                            <p class="text-gray-600 text-sm md:text-base lg:text-base">Selesai</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>

            <div id="tab2" class="tab-content hidden mt-6">
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Event ini merupakan program yang
                            dapat diikuti oleh seluruh anggota HIMA-SIKC. Anggota HIMA-SIKC dapat mengikuti program ini
                            sebagai panitia, peserta, atau lain sebagainya.</p>
                    </div>
                </div>

                {{-- Non-Event --}}
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 mt-12 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Non-Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Non-event ini merupakan program
                            yang diselenggarakan oleh tiap divisi untuk mengembangkan HIMA-SIKC dalam bentuk program kerja
                            internal HIMA-SIKC.</p>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab-content hidden mt-6">
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Event ini merupakan program yang
                            dapat diikuti oleh seluruh anggota HIMA-SIKC. Anggota HIMA-SIKC dapat mengikuti program ini
                            sebagai panitia, peserta, atau lain sebagainya.</p>
                    </div>
                </div>

                {{-- Non-Event --}}
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 mt-12 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Non-Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Non-event ini merupakan program
                            yang diselenggarakan oleh tiap divisi untuk mengembangkan HIMA-SIKC dalam bentuk program kerja
                            internal HIMA-SIKC.</p>
                    </div>
                </div>
            </div>
            <div id="tab4" class="tab-content hidden mt-6">
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Event ini merupakan program yang
                            dapat diikuti oleh seluruh anggota HIMA-SIKC. Anggota HIMA-SIKC dapat mengikuti program ini
                            sebagai panitia, peserta, atau lain sebagainya.</p>
                    </div>

                </div>

                {{-- Non-Event --}}
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 mt-12 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Non-Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Non-event ini merupakan program
                            yang diselenggarakan oleh tiap divisi untuk mengembangkan HIMA-SIKC dalam bentuk program kerja
                            internal HIMA-SIKC.</p>
                    </div>

                </div>
            </div>
            <div id="tab5" class="tab-content hidden mt-6">
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Event ini merupakan program yang
                            dapat diikuti oleh seluruh anggota HIMA-SIKC. Anggota HIMA-SIKC dapat mengikuti program ini
                            sebagai panitia, peserta, atau lain sebagainya.</p>
                    </div>

                </div>

                {{-- Non-Event --}}
                <div class="sm:px-2 lg:px-10">
                    <div class="description mb-10 mt-12 text-center">
                        <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">Non-Event</h1>
                        <p class="text-base font-semibold leading-7 text-gray-600">Program Non-event ini merupakan program
                            yang diselenggarakan oleh tiap divisi untuk mengembangkan HIMA-SIKC dalam bentuk program kerja
                            internal HIMA-SIKC.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        function showTab(tabId) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));

            // Remove active styling from all tabs
            document.querySelectorAll('.tab-button').forEach(tab => tab.classList.remove('active-tab'));

            // Show the selected tab content and add active styling
            document.getElementById(tabId).classList.remove('hidden');
            document.querySelector(`[onclick="showTab('${tabId}')"]`).classList.add('active-tab');
        }

        // Set default active tab
        document.addEventListener('DOMContentLoaded', () => {
            showTab('tab1');
        });
    </script>
@endsection
