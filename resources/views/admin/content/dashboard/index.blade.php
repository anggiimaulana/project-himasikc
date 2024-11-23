@extends('admin.content.main')
@section('title', $title)
@section('main')
    <!-- Container Utama -->
    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-white border-r shadow-lg flex flex-col transition-all duration-300">
            <!-- Logo dan Tombol Hamburger -->
            <div class="p-4 flex items-center justify-between">
                <div class="text-indigo-600 text-3xl font-bold">🌊</div>
            </div>

            <!-- Navigation Menu -->
            <nav class="flex-1 px-4 space-y-2">
                <ul>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-indigo-600 bg-indigo-50 rounded-lg font-medium hover:bg-indigo-100">
                            <span class="text-lg">🏠</span>
                            <span class="sidebar-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg">👥</span>
                            <span class="sidebar-text">Team</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg">📁</span>
                            <span class="sidebar-text">Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg">📅</span>
                            <span class="sidebar-text">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg">📄</span>
                            <span class="sidebar-text">Documents</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg">📊</span>
                            <span class="sidebar-text">Reports</span>
                        </a>
                    </li>
                </ul>
                <!-- Teams Section -->
                <div class="mt-8">
                    <h3 class="sidebar-text text-xs font-semibold text-gray-500 px-4 uppercase tracking-wide">Your Teams
                    </h3>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                                <span
                                    class="text-sm bg-gray-200 rounded-full w-6 h-6 flex items-center justify-center">H</span>
                                <span class="sidebar-text">Heroicons</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                                <span
                                    class="text-sm bg-gray-200 rounded-full w-6 h-6 flex items-center justify-center">T</span>
                                <span class="sidebar-text">Tailwind Labs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                                <span
                                    class="text-sm bg-gray-200 rounded-full w-6 h-6 flex items-center justify-center">W</span>
                                <span class="sidebar-text">Workcation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Settings -->
            <div class="px-4 py-3">
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                    <span class="text-lg">⚙️</span>
                    <span class="sidebar-text">Settings</span>
                </a>
            </div>
        </aside>

        <!-- Konten Utama -->
        <div class="flex-1 overflow-y-auto">
            <header class="bg-white shadow p-4 flex items-center justify-between">
                <!-- Tombol Hamburger Mobile -->
                <button onclick="toggleMobileSidebar()" class="lg:hidden block text-gray-600 hover:bg-gray-100 p-2 rounded">
                    ☰
                </button>
                <input type="text" placeholder="Search..."
                    class="w-full max-w-xs p-2 border rounded-lg focus:outline-none">
                <div class="flex items-center space-x-4">
                    <button class="p-2 rounded-full hover:bg-gray-100 focus:outline-none">
                        <span>🔔</span>
                    </button>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm font-medium">Tom Cook</span>
                        <img src="https://via.placeholder.com/32" alt="Profile" class="w-8 h-8 rounded-full">
                    </div>
                </div>
            </header>
            <div class="p-6">
                <div
                    class="w-full h-[600px] border-2 border-dashed border-gray-300 bg-gray-50 flex items-center justify-center">
                    <p class="text-gray-400">Content Area</p>
                </div>
            </div>
        </div>

    </div>

@endsection
