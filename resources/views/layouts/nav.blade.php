<header class="bg-white">
    <nav class="container mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-14 border-b border-gray-200"
        aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <img class="h-10 md:h-29 lg:h-12 w-auto" src="{{ asset('assets/himasikc.jpg') }}" alt="logo-himasikc" loading="lazy">
            </a>
            <a href="/"
                class=" font-bold text-yellow-500 hover:text-yellow-400 lg:hidden md:hidden mt-2 ml-3">HIMA-SIKC</a>
        </div>

        <!-- Mobile hamburger button -->
        <div class="flex lg:hidden md:hidden">
            <button id="menu-toggle" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <!-- Desktop menu -->
        <div class="navbar hidden lg:flex md:flex md:gap-x-6 lg:gap-x-12">
            <a href="/"
                class="font-semibold text-gray-700 flex items-center gap-x-1 hover:text-yellow-400 {{ isset($slug) && $slug === 'home' ? 'active' : '' }}">
                <i class='bx bxs-home text-xl'></i>
                <p>Beranda</p>
            </a>
            <a href="/app/profil"
                class="font-semibold text-gray-700 flex items-center gap-x-1 hover:text-yellow-400 {{ isset($slug) && $slug === 'profil' ? 'active' : '' }}">
                <i class='bx bxs-user-detail text-xl'></i>
                <p>Profil</p>
            </a>
            <a href="/app/program"
                class="font-semibold text-gray-700 flex items-center gap-x-1 hover:text-yellow-400 {{ isset($slug) && $slug === 'program' ? 'active' : '' }}">
                <i class='bx bxs-pie-chart-alt-2 text-xl'></i>
                <p>Program</p>
            </a>
            <a href="/app/store"
                class="font-semibold text-gray-700 flex items-center gap-x-1 hover:text-yellow-400 {{ isset($slug) && $slug === 'store' ? 'active' : '' }}">
                <i class='bx bxs-store text-xl'></i>
                <p>Store</p>
            </a>
            <a href="/app/blog"
                class="font-semibold text-gray-700 flex items-center gap-x-1 hover:text-yellow-400 {{ isset($slug) && $slug === 'blog' ? 'active' : '' }}">
                <i class='bx bxl-blogger text-xl'></i>
                <p>Blog</p>
            </a>
            <a href="/app/fitur"
                class="font-semibold text-gray-700 flex items-center gap-x-1 hover:text-yellow-400 {{ isset($slug) && $slug === 'fitur' ? 'active' : '' }}">
                <i class='bx bx-chart text-xl'></i>
                <p>Fitur</p>
            </a>
        </div>


        <div class="hidden lg:flex md:flex lg:flex-1 lg:justify-end">
            <a href="/" class=" font-bold text-yellow-500 hover:text-yellow-400">HIMA-SIKC</a>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="lg:hidden hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-10 bg-gray-900 opacity-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-20 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-x-2">
                    <a href="/" class="-m-1.5 p-1.5">
                        <img class="h-10 w-auto" src="{{ asset('assets/himasikc.jpg') }}" alt="logo-himasikc" loading="lazy">
                    </a>
                    <a href="/" class="font-bold text-yellow-500 hover:text-yellow-400 ml-1">HIMA-SIKC</a>
                </div>
                <button id="menu-close" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-yellow-400 {{ isset($slug) && $slug === 'home' ? 'active' : '' }}">
                            <i class='bx bx-home-alt'></i> Beranda
                        </a>
                        <a href="/app/profil"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-yellow-400 {{ isset($slug) && $slug === 'profil' ? 'active' : '' }}">
                            <i class='bx bxs-user-detail'></i> Profil
                        </a>
                        <a href="/app/program"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-yellow-400 {{ isset($slug) && $slug === 'program' ? 'active' : '' }}">
                            <i class='bx bxs-pie-chart-alt-2'></i> Program
                        </a>
                        <a href="/app/store"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-yellow-400 {{ isset($slug) && $slug === 'store' ? 'active' : '' }}">
                            <i class='bx bx-store'></i> Store
                        </a>
                        <a href="/app/blog"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-yellow-400 {{ isset($slug) && $slug === 'blog' ? 'active' : '' }}">
                            <i class='bx bxl-blogger'></i> Blog
                        </a>
                        <a href="/app/fitur"
                            class="-mx-3 flex items-center gap-x-2 rounded-lg px-3 py-2 font-semibold text-gray-900 hover:bg-gray-50 hover:text-yellow-400 {{ isset($slug) && $slug === 'fitur' ? 'active' : '' }}">
                            <i class='bx bx-chart'></i> Fitur
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script>
    // JavaScript for toggling the mobile menu
    const menuToggle = document.getElementById('menu-toggle');
    const menuClose = document.getElementById('menu-close');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    menuClose.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
</script>
