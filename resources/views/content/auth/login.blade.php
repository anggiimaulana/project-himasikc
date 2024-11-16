@extends('content.main')
@section('title', $title)
@section('data')
    <section class="py-12 bg-white sm:py-16 lg:py-10">
        <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="font-bold text-yellow-500 text-2xl lg:text-3xl text-center">Login Admin</h2>
                <p class="text-base font-semibold leading-7 text-gray-600 text-center">Himpunan Mahasiswa Sistem Informasi
                    Kota Cerdas
            </div>

            <div class="px-4 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    @if (session('failed'))
                        <p class="text-red-600 font-semibold text-base">{{ session('failed') }}</p>
                    @endif
                    <div class="relative">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="peer block w-full rounded-md border-0 bg-gray-50 py-2 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-transparent focus:ring-1 focus:ring-gray-200 focus:ring-offset-0 focus:outline-none text-base"
                            placeholder="Email">
                        <label for="email"
                            class="absolute left-3 top-0.5 text-gray-400 text-base transition-all transform -translate-y-3 scale-75 origin-left bg-white px-1 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1.5 peer-focus:scale-75 peer-focus:-translate-y-3">
                            Email
                        </label>
                    </div>

                    <div class="relative">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="peer block w-full rounded-md border-0 bg-gray-50 py-2 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-transparent focus:ring-1 focus:ring-gray-200 focus:ring-offset-0 focus:outline-none text-base"
                            placeholder="Password">
                        <label for="password"
                            class="absolute left-3 top-0.5 text-gray-400 text-base transition-all transform -translate-y-3 scale-75 origin-left bg-white px-1 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1.5 peer-focus:scale-75 peer-focus:-translate-y-3">
                            Password
                        </label>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-amber-500 py-1.5 px-2 text-lg font-semibold text-white shadow-sm hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
