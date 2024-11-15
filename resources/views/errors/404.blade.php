@extends('content.main')
@section('title')
@section('data')
    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <h2 class="text-5xl font-bold text-yellow-500">404</h2>
            <h1 class="mt-4 text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-7xl">Page not found</h1>
            <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
                Maaf, kami tidak dapat menemukan halaman yang Anda cari.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/"
                    class="rounded-md bg-amber-500 px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Kembali ke beranda</a>
            </div>
        </div>
    </main>
@endsection
