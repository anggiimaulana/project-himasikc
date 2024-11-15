@extends('content.main')
@section('title', $title)
@section('data')
@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

<section class="py-12 bg-white sm:py-16 lg:py-10">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-md mx-auto text-center">
            <p class="text-base font-semibold leading-7 text-gray-600">Himpunan Mahasiswa Sistem Informasi Kota Cerdas</p>
        </div>
        
        <div class="relative h-screen flex flex-col items-center justify-center text-yellow-500">
            <h1 class="text-9xl font-bold text-center">BLOG</h1>
            <br>
<div class="flex">
    <form action="{{ route('blog.search') }}" method="GET" class="flex w-full">
        <input 
            name="search" 
            class="px-4 py-2 rounded-l-md bg-gray-800 text-white focus:outline-none w-full" 
            placeholder="Cari blog" 
            type="text"/>
        <button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded-r-md hover:bg-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3a8 8 0 00-8 8 8 8 0 0014.32 5.9l4.38 4.38a1 1 0 001.42-1.42l-4.38-4.38A8 8 0 0011 3z" />
            </svg>
        </button>
    </form>
</div>
            <div class="mt-4 flex space-x-4 justify-center">
                <button class="px-4 py-2 bg-gray-700 text-white rounded-md hover:bg-gray-600">SEMUA</button>
                <button class="px-4 py-2 bg-gray-700 text-white rounded-md hover:bg-gray-600">HIMA-SIKC INFO</button>
                <button class="px-4 py-2 bg-gray-700 text-white rounded-md hover:bg-gray-600">HIMA-SIKC BERITA</button>
            </div>
        </div>

        <br>
        <div class="max-w-4xl mx-auto py-12 px-4">
            <div class="max-w-md mx-auto text-center">
                <h1 class="text-4xl font-bold text-yellow-500">Terbaru</h1>
            </div>
            <br>

            @php
            $blogs = [
                [
                    'title' => 'JUDUL BERITA',
                    'date' => 'Mar 16, 2020',
                    'category' => 'Marketing',
                    'description' => 'TEKS BERITA.',
                    'author' => 'FAJRI AG',
                    'position' => 'Co-Founder / CTO',
                    'image' => 'https://storage.googleapis.com/a1aa/image/2FFoepXwXZy5NSbxmOoe5iE31r0hLxDnJ76xS1Qt5Y8bFfgnA.jpg',
                    'profile' => 'https://storage.googleapis.com/a1aa/image/FeiNc2TRBtVUfkbnrsWOfzXfA0UeY4L5ZEdqf62eh1r0siP4JA.jpg',
                ],
                [
                    'title' => 'JUDUL BERITA',
                    'date' => 'Mar 16, 2020',
                    'category' => 'Marketing',
                    'description' => 'TEKS BERITA.',
                    'author' => 'FAJRI AG',
                    'position' => 'Co-Founder / CTO',
                    'image' => 'https://storage.googleapis.com/a1aa/image/2FFoepXwXZy5NSbxmOoe5iE31r0hLxDnJ76xS1Qt5Y8bFfgnA.jpg',
                    'profile' => 'https://storage.googleapis.com/a1aa/image/FeiNc2TRBtVUfkbnrsWOfzXfA0UeY4L5ZEdqf62eh1r0siP4JA.jpg',
                ],
                [
                    'title' => 'JUDUL BERITA',
                    'date' => 'Mar 16, 2020',
                    'category' => 'Marketing',
                    'description' => 'TEKS BERITA.',
                    'author' => 'FAJRI AG',
                    'position' => 'Co-Founder / CTO',
                    'image' => 'https://storage.googleapis.com/a1aa/image/2FFoepXwXZy5NSbxmOoe5iE31r0hLxDnJ76xS1Qt5Y8bFfgnA.jpg',
                    'profile' => 'https://storage.googleapis.com/a1aa/image/FeiNc2TRBtVUfkbnrsWOfzXfA0UeY4L5ZEdqf62eh1r0siP4JA.jpg',
                ],
                // BUAT DISINI JIKA MAU MENAMBAHKAN
            ];
            @endphp

            @foreach ($blogs as $blog)
            <div class="mt-8 flex flex-col md:flex-row">
                <div class="md:w-1/3">
                    <img alt="{{ $blog['title'] }}" class="rounded-lg" src="{{ $blog['image'] }}"/>
                </div>
                
                <div class="md:w-2/3 md:pl-6 mt-4 md:mt-0">
                    <div class="flex items-center text-gray-500 text-sm">
                        <span>{{ $blog['date'] }}</span>
                        <span class="mx-2">|</span>
                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $blog['category'] }}</span>
                    </div>
                    <h2 class="mt-2 text-2xl font-semibold text-gray-900">{{ $blog['title'] }}</h2>
                    <p class="mt-2 text-gray-500">{{ $blog['description'] }}</p>
                    <div class="mt-4 flex items-center">
                        <img alt="Profile picture of {{ $blog['author'] }}" class="h-10 w-10 rounded-full" src="{{ $blog['profile'] }}"/>
                        <div class="ml-3">
                            <p class="text-gray-900 font-semibold">{{ $blog['author'] }}</p>
                            <p class="text-gray-500">{{ $blog['position'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
