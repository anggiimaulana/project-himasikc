@extends('admin.content.main')
@section('title', $title)
@section('main')
<section class="py-12 bg-white sm:py-16 lg:py-10">
    <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="font-bold text-yellow-500 text-2xl lg:text-3xl text-center">Login Admin</h2>
            <p class="text-base font-semibold leading-7 text-gray-600 text-center">Himpunan Mahasiswa Sistem Informasi
                Kota Cerdas
                @if (Auth::guard('admin')->check())
                    <p class="font-bold text-red-900 text-base">Halo {{ Auth::guard('admin')->user()->nama }}, Anda
                        berhasil login!</p>
                @else
                    <p>Session Admin tidak terdeteksi.</p>
                @endif
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button
                    class="px-3 py-1.5 bg-red-500 text-white rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    Logout
                </button>
            </form>
        </div>
    </div>
</section>
@endsection