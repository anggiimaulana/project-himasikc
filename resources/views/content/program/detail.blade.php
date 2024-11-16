@extends('content.main')
@section('title', $title)
@section('data')
    <section class="py-12 bg-white sm:py-16 lg:py-10">
        <div class="px-6 sm:px-10 lg:px-16 mx-auto">
            <div class="mx-10 lg:mx-14 flex items-center space-x-4 text-gray-600">
                <a href="/app/program" class="text-gray-600 hover:text-yellow-400 font-semibold">Program</a>
                <span class="text-gray-400">/</span>
                <a href="/app/program" class="text-gray-600 hover:text-yellow-400 font-semibold">Event</a>
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
                <div class="mt-3 pl-2 block">
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
        <main class="px-6 md:px-10 lg:px-16 mx-auto">
            <div class="detail my-4 lg:my-6 mx-8 md:mx-12 lg:mx-16 text-center text-gray-600">
                <h1 class="font-bold text-grey-500 text-base lg:text-lg border-b border-gray-400 py-1">Detail Program</h1>
            </div>
            <div class="description mx-8 md:mx-12 lg:mx-16  text-gray-600">
                <h1 class="font-semibold text-grey-500 text-base lg:text-lg pb-1">Deskripsi</h1>
            </div>
        </main>
    </section>
@endsection
