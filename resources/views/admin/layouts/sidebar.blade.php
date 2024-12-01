        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-white border-r shadow-lg flex flex-col transition-all duration-300">
            <!-- Logo dan Tombol Hamburger -->
            <div class="p-4 flex items-center justify-between mb-4">
                <div class="flex">
                    <img class="h-10 md:h-29 lg:h-12 w-auto bg-transparent"
                        src="{{ asset('assets/LOGO-HIMA-SIKC FIX.png') }}" alt="logo-himasikc" loading="lazy">
                    <span class="font-bold text-yellow-500 hover:text-yellow-400 mt-3 ml-3" id="himasikc">
                        <p>HIMA-SIKC</p>
                    </span>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="flex-1 px-4 space-y-2">
                <ul>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-indigo-600 bg-indigo-50 rounded-lg font-medium hover:bg-indigo-100">
                            <span class="text-lg"><i class='bx bxs-home'></i></span>
                            <span class="sidebar-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg"><i class='bx bxs-user-detail text-xl'></i></span>
                            <span class="sidebar-text">Profil</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg"><i class='bx bxs-pie-chart-alt-2 text-xl'></i></span>
                            <span class="sidebar-text">Program</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg"><i class='bx bxs-store text-xl'></i></span>
                            <span class="sidebar-text">Store</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg"><i class='bx bxl-blogger text-xl'></i></span>
                            <span class="sidebar-text">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg font-medium">
                            <span class="text-lg"><i class='bx bx-chart text-xl'></i></span>
                            <span class="sidebar-text">Fitur</span>
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
