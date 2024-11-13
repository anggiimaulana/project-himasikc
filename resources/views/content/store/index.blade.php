@extends('content.main')
@section('title', $title)
@section('data')
<section class="py-12 bg-white sm:py-16 lg:py-0">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-md mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">Produk Kami</h2>
            <p class="mt-4 text-base font-normal leading-7 text-gray-600">Berilah Produk Dari HIMA-SIKC</p>
        </div>



        <!-- Product Categories -->
        <div class="text-center mt-8">
            <a href="#" class="category-link bg-gray-800 text-white py-2 px-4 rounded-md font-bold hover:bg-amber-300 hover:text-black transition">SEMUA</a>
            <a href="#" class="category-link bg-gray-800 text-white py-2 px-4 rounded-md font-bold hover:bg-amber-300 hover:text-black transition">T-Shirt</a>
            <a href="#" class="category-link bg-gray-800 text-white py-2 px-4 rounded-md font-bold hover:bg-amber-300 hover:text-black transition">Totebag</a>
            <a href="#" class="category-link bg-gray-800 text-white py-2 px-4 rounded-md font-bold hover:bg-amber-300 hover:text-black transition">Key Chain</a>
            <a href="#" class="category-link bg-gray-800 text-white py-2 px-4 rounded-md font-bold hover:bg-amber-300 hover:text-black transition">Hat</a>
            <a href="#" class="category-link bg-gray-800 text-white py-2 px-4 rounded-md font-bold hover:bg-amber-300 hover:text-black transition">Pin</a>
        </div>

        <!-- Products Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6 mt-6">
            <!-- Product Card 1 -->
            <div class="bg-gray-800 rounded-lg p-4 border-2 border-gray-600">
                <div class="relative">
                    <img src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-4.png" alt="Product 1" class="rounded-lg">
                    <span class="absolute top-2 left-2 bg-amber-300 text-white text-sm px-2 py-1 rounded">Ready</span>
                </div>
                <div class="mt-4">
                    <p class="text-gray-400 mt-2 text-sm">T-SHIRT</p>
                    <!-- Menetapkan tinggi minimum untuk judul agar konsisten -->
                    <h3 class="text-white font-semibold mt-1 min-h-[3rem]">"Homesick" HighSt T-Shirt Cotton Combed</h3>
                    <p class="text-white font-bold mt-2">Rp85000</p>
                    <a href="#" class="w-full inline-block text-center bg-amber-300 text-white py-2 rounded-md mt-2 hover:bg-amber-400 transition">
                        Beli Sekarang
                    </a>
                    
                </div>
            </div>
            

            <!-- Product Card 2 -->
            <div class="bg-gray-800 rounded-lg p-4 border-2 border-gray-600">
                <div class="relative">
                    <img src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-4.png" alt="Product 2" class="rounded-lg">
                    <span class="absolute top-2 left-2 bg-amber-300 text-white text-sm px-2 py-1 rounded">Ready</span>
                </div>
                <div class="mt-4">
                    <p class="text-gray-400 mt-2 text-sm">T-SHIRT</p>
                    <h3 class="text-white font-semibold mt-1 min-h-[3rem]">"Metaverse" HighSt T-Shirt Cotton Combed</h3>
                    <p class="text-white font-bold mt-2">Rp85000</p>
                    <a href="#" class="w-full inline-block text-center bg-amber-300 text-white py-2 rounded-md mt-2 hover:bg-amber-400 transition">
                        Beli Sekarang
                    </a>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-gray-800 rounded-lg p-4 border-2 border-gray-600">
                <div class="relative">
                    <img src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-4.png" alt="Product 3" class="rounded-lg">
                    <span class="absolute top-2 left-2 bg-amber-300 text-white text-sm px-2 py-1 rounded">Ready</span>
                </div>
                <div class="mt-4">
                    <p class="text-gray-400 mt-2 text-sm">TOTEBAG</p>
                    <h3 class="text-white font-semibold mt-1 min-h-[3rem]">"Be Your Self" HighSt Totebag</h3>
                    <p class="text-white font-bold mt-2">Rp40000</p>
                     <a href="#" class="w-full inline-block text-center bg-amber-300 text-white py-2 rounded-md mt-2 hover:bg-amber-400 transition">
                        Beli Sekarang
                    </a>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="bg-gray-800 rounded-lg p-4 border-2 border-gray-600">
                <div class="relative">
                    <img src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-4.png" alt="Product 4" class="rounded-lg">
                    <span class="absolute top-2 left-2 bg-amber-300 text-white text-sm px-2 py-1 rounded">Ready</span>
                </div>
                <div class="mt-4">
                    <p class="text-gray-400 mt-2 text-sm">TOTEBAG</p>
                    <h3 class="text-white font-semibold mt-1 min-h-[3rem]">"Ceder" HighSt Totebag</h3>
                    <p class="text-white font-bold mt-2">Rp40000</p>
                     <a href="#" class="w-full inline-block text-center bg-amber-300 text-white py-2 rounded-md mt-2 hover:bg-amber-400 transition">
                        Beli Sekarang
                    </a>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="bg-gray-800 rounded-lg p-4 border-2 border-gray-600">
                <div class="relative">
                    <img src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-4.png" alt="Product 5" class="rounded-lg">
                    <span class="absolute top-2 left-2 bg-amber-300 text-white text-sm px-2 py-1 rounded">Ready</span>
                </div>
                <div class="mt-4">
                    <p class="text-gray-400 mt-2 text-sm">HAT</p>
                    <h3 class="text-white font-semibold mt-1 min-h-[3rem]">HighSt Topi Baseball/Baseball</h3>
                    <p class="text-white font-bold mt-2">Rp38000</p>
                     <a href="#" class="w-full inline-block text-center bg-amber-300 text-white py-2 rounded-md mt-2 hover:bg-amber-400 transition">
                        Beli Sekarang
                    </a>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="bg-gray-800 rounded-lg p-4 border-2 border-gray-600">
                <div class="relative">
                    <img src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-4.png" alt="Product 6" class="rounded-lg">
                    <span class="absolute top-2 left-2 bg-amber-300 text-white text-sm px-2 py-1 rounded">Ready</span>
                </div>
                <div class="mt-4">
                    <p class="text-gray-400 mt-2 text-sm">HAT</p>
                    <h3 class="text-white font-semibold mt-1 min-h-[3rem]">HighSt Topi Baseball/Baseball</h3>
                    <p class="text-white font-bold mt-2">Rp38000</p>
                     <a href="#" class="w-full inline-block text-center bg-amber-300 text-white py-2 rounded-md mt-2 hover:bg-amber-400 transition">
                        Beli Sekarang
                    </a>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="bg-gray-800 rounded-lg p-4 border-2 border-gray-600">
                <div class="relative">
                    <img src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-4.png" alt="Product 6" class="rounded-lg">
                    <span class="absolute top-2 left-2 bg-amber-300 text-white text-sm px-2 py-1 rounded">Ready</span>
                </div>
                <div class="mt-4">
                    <p class="text-gray-400 mt-2 text-sm">HAT</p>
                    <h3 class="text-white font-semibold mt-1 min-h-[3rem]">HighSt Topi Baseball/Baseball</h3>
                    <p class="text-white font-bold mt-2">Rp38000</p>
                     <a href="#" class="w-full inline-block text-center bg-amber-300 text-white py-2 rounded-md mt-2 hover:bg-amber-400 transition">
                        Beli Sekarang
                    </a>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="bg-gray-800 rounded-lg p-4 border-2 border-gray-600">
                <div class="relative">
                    <img src="https://cdn.rareblocks.xyz/collection/clarity-ecommerce/images/item-cards/4/product-4.png" alt="Product 6" class="rounded-lg">
                    <span class="absolute top-2 left-2 bg-amber-300 text-white text-sm px-2 py-1 rounded">Ready</span>
                </div>
                <div class="mt-4">
                    <p class="text-gray-400 mt-2 text-sm">HAT</p>
                    <h3 class="text-white font-semibold mt-1 min-h-[3rem]">HighSt Topi Baseball/Baseball</h3>
                    <p class="text-white font-bold mt-2">Rp38000</p>
                     <a href="#" class="w-full inline-block text-center bg-amber-300 text-white py-2 rounded-md mt-2 hover:bg-amber-400 transition">
                        Beli Sekarang
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>


@endsection
