@extends('content.main')
@section('title', $title)
@section('data')
    <section class="py-12 bg-white sm:py-16 lg:py-10">
        <div class="px-6 sm:px-10 lg:px-16 mx-auto">
            <div class="mx-10 lg:mx-14 flex items-center space-x-4 text-gray-600">
                <a href="/app/program" class="text-gray-600 hover:text-yellow-400 font-semibold">Program</a>
                <span class="text-gray-400">/</span>
                <p href="#" class="text-yellow-500 hover:text-yellow-400 font-bold">Diesnatalis</p>
            </div>
            {{-- <div class="max-w-md mx-auto text-center my-8">
                <h1 class="font-bold text-yellow-500 text-2xl lg:text-3xl">PROGRAM KERJA</h1>
                <p class="text-base font-semibold leading-7 text-gray-600">Himpunan Mahasiswa Sistem Informasi Kota Cerdas
                </p>
            </div> --}}
            <div class="mx-0 lg:mx-16 pt-5 flex justify-center items-center text-center">
                <img src="{{ asset('assets/himasikc.jpg') }}" alt="Logo" loading="lazy"
                    class="w-auto h-28 lg:h-40 object-cover rounded-t-lg p-2">
                <div class="mt-3 p-2 block">
                    <h1 class="text-gray-700 text-base md:text-lg lg:text-lg font-bold">
                        ACADEMIC ROOM
                    </h1>
                    <p class="text-gray-600 text-sm md:text-base lg:text-base">Program Kerja:
                        <span class="text-blue-400 text-sm md:text-base lg:text-base font-semibold">LITBANG</span>
                    </p>
                    <p class="text-gray-600 text-sm lg:text-base md:text-base">September - November 2024</p>
                    <p class="text-blue-500 text-sm md:text-base lg:text-base">Selesai</p>
                </div>
            </div>
        </div>
        <main class="md:px-10 lg:px-16 mx-auto">
            <div class="row flex flex-col lg:flex-row gap-8">
                {{-- program utama --}}
                <div class="col basis-11/12">
                    <div class="detail my-4 lg:my-6 mx-8 md:mx-12 lg:mx-0 lg:ml-14 lg:mr-16 text-center text-gray-600">
                        <h1 class="font-bold text-grey-500 text-base lg:text-lg border-b border-gray-400 py-1">Detail
                            Program</h1>
                    </div>
                    <div class="description mx-8 md:mx-12 lg:mx-14">
                        <h1 class="font-semibold text-gray-600 text-base lg:text-lg pb-1">Deskripsi</h1>
                        <p class="font-base text-gray-500">Academic Room merupakan wadah bagi mahasiswa tingkat 1 Program
                            Studi D4
                            Sistem Informasi Kota Cerdas untuk mengembangkan kemampuan pemrograman mereka terutama dibidang
                            web.
                            Metode yang digunakan dalam kegiatan ini adalah metode pembelajaran interaktif dan berbasis
                            proyek
                            (PBL). Kegiatan ini dilaksanakan secara offline di lingkungan kampus Himpunan Mahasiswa Sistem
                            Informasi
                            Kota Cerdas (HIMASIKC). </p>
                    </div>
                    <div class="theme mx-8 md:mx-12 lg:mx-14 my-4">
                        <h1 class="font-semibold text-gray-600 text-base lg:text-lg pb-1">Tema</h1>
                        <p class="font-base text-gray-500">"Achieving Academic Brilliance" : Pengembangan sumber daya dan
                            bimbingan untuk mencapai kecemerlangan akademik.
                        </p>
                    </div>
                    <div class="purpose mx-8 md:mx-12 lg:mx-14 mb-4">
                        <h1 class="font-semibold text-gray-600 text-base lg:text-lg pb-1">Tujuan</h1>
                        <ol class="font-base text-gray-500 mx-8 list-decimal">
                            <li>Sistem Informasi Kota Cerdas untuk mengembangkan kemampuan pemrograman mereka terutama
                                dibidang web.</li>
                            <li>Kegiatan ini bertujuan agar mahasiswa tingkat 1 dapat memperoleh ilmu dan keterampilan
                                pemrograman web yang bermanfaat untuk menunjang mata kuliah semester berikutnya. </li>
                            <li>Selain itu, kegiatan ini juga bertujuan agar mahasiswa Program Studi Sistem Informasi Kota
                                Cerdas dapat saling belajar, berdiskusi, dan berbagi pengetahuan di luar pembelajaran
                                formal.
                            </li>
                        </ol>
                    </div>
                    <div class="goals mx-8 md:mx-12 lg:mx-14 mb-4">
                        <h1 class="font-semibold text-gray-600 text-base lg:text-lg pb-1">Sasaran</h1>
                        <p class="font-base text-gray-500">Meningkatkan dan mengembangkan pengetahuan Mahasiswa mengenai
                            konsep-konsep pemrograman web yang relevan dengan mata kuliah Prodi Sistem Informasi Kota
                            Cerdas.
                        </p>
                    </div>
                    <div class="result mx-8 md:mx-12 lg:mx-14 mb-4">
                        <h1 class="font-semibold text-gray-600 text-base lg:text-lg pb-1">Hasil</h1>
                        <p class="font-base text-gray-500">Academic Room merupakan wadah bagi mahasiswa tingkat 1 Program
                            Studi D4
                            Sistem Informasi Kota Cerdas untuk mengembangkan kemampuan pemrograman mereka terutama dibidang
                            web.
                            Metode yang digunakan dalam kegiatan ini adalah metode pembelajaran interaktif dan berbasis
                            proyek
                            (PBL). Kegiatan ini dilaksanakan secara offline di lingkungan kampus Himpunan Mahasiswa Sistem
                            Informasi
                            Kota Cerdas (HIMASIKC). </p>
                    </div>
                    <div class="docs mx-8 md:mx-12 lg:mx-14">
                        <h1 class="font-semibold text-gray-600 text-base lg:text-lg">Dokumentasi</h1>
                        <div class="grid-cols-1 flex overflow-x-auto gap-x-4 bg-transparent my-4 rounded-lg">
                            <img src="{{ asset('assets/AR1.jpg') }}" alt="docs1" loading="lazy"
                                class="w-full h-48 lg:h-60 lg:w-full object-cover">
                            <img src="{{ asset('assets/AR3.jpg') }}" alt="docs2" loading="lazy"
                                class="w-full h-48 lg:h-60 lg:w-full object-cover">
                            <img src="{{ asset('assets/AR2.jpg') }}" alt="docs3" loading="lazy"
                                class="w-full h-48 lg:h-60 lg:w-full object-cover">
                        </div>
                    </div>
                </div>

                {{-- program lainnya --}}
                <div class="col basis-1/5 mx-8 lg:mx-14">
                    <div class="detail my-4 lg:my-6 text-center text-gray-600 ">
                        <h1 class="font-bold text-grey-500 text-base lg:text-lg border-b border-gray-400 py-1 ">
                            Program Lainnya dari <span class="text-yellow-500">LITBANG</span>
                        </h1>
                    </div>
                    <div class="grid-cols-1 gap-2 lg:gap-4 flex lg:grid overflow-x-auto sm:gap-x-4">
                        @foreach (range(1, 3) as $i)
                            <a href="{{ route('program.detail') }}" class="flex-shrink-0 sm:w-auto my-2 lg:my-0">
                                <div class="bg-transparent rounded-lg p-4 shadow-lg hover:shadow-2xl">
                                    <img src="{{ asset('assets/himasikc.jpg') }}" alt="Logo" loading="lazy"
                                        class="h-36 lg:h-full md:h-52 object-cover rounded-t-lg lg:p-2 w-auto lg:w-48">
                                    <div class="mt-4">
                                        <h1
                                            class="text-gray-700 sm:text-base md:text-lg lg:text-lg sm:text-semibold font-bold">
                                            ACADEMIC ROOM</h1>
                                        <p class="text-gray-600 md:text-base lg:text-base sm:text-sm mt-2">Program Kerja:
                                            <span
                                                class="text-blue-400 md:text-base lg:text-base sm:text-sm font-semibold">LITBANG</span>
                                        </p>
                                        <p class="text-gray-600 lg:text-base md:text-base sm:text-sm mt-2">September -
                                            November
                                            2024</p>
                                        <div class="flex items-center mt-2">
                                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                            <p class="text-gray-600 sm:text-sm md:text-base lg:text-base">Selesai</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>


            </div>
        </main>
    </section>
@endsection
