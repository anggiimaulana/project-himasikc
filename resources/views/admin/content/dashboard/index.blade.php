@extends('admin.content.main')
@section('title', $title)
@section('main')
    <div class="flex h-screen overflow-hidden">
        @include('admin.layouts.sidebar') <!-- Sidebar tetap -->

        <!-- Konten Utama -->
        <div id="main-content" class="flex-1 flex flex-col h-full">
            @include('admin.layouts.nav') <!-- Header Tetap di Atas -->

            <!-- Area Konten yang Bisa Di-scroll -->
            <div class="flex-1 overflow-y-auto p-6 bg-gray-50">
                <div class="w-full h-[600px] border-2 border-dashed border-gray-300 flex items-center justify-center">
                    <p class="text-gray-400">Content Area</p>
                </div>
            </div>
        </div>
    </div>


@endsection
