<footer class="bg-white py-6 border-t border-gray-200">
    <div class="mx-auto px-14">
        <div class="flex flex-col lg:flex-row lg:justify-between gap-16">
            <!-- Logo and description -->
            <div class="lg:w-1/4 flex flex-col items-start space-y-4">
                <img src="{{ asset('assets/logo-himasikc.jpg') }}" alt="Logo Himasikc"
                    class="h-10 w-auto">
                <h2 class="text-gray-700 font-bold text-xl">HIMA-SIKC</h2>
                <p class="text-gray-500">
                    Politeknik Negeri Indramayu <br><span>Jl. Lohbener Lama No.08, Lohbener, Legok, Indramayu, Kabupaten
                        Indramayu, Jawa Barat. Kode Pos 45252</span>
                </p>
            </div>

            <!-- Links and Social Media Section -->
            <div class="lg:w-3/4 flex flex-col lg:flex-row lg:justify-between gap-32 pt-11">
                <div class="lg:w-1/3">
                    <h1 class="font-bold text-gray-700 text-xl">Terhubung dengan kami</h1>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4 mt-5">
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                class="bx bxl-instagram text-4xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                class="bx bxl-github text-4xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i 
                            class='bx bxl-tiktok text-4xl'></i></a>
                        <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                class="bx bxl-youtube text-4xl"></i></a>
                    </div>
                </div>

                <div class="lg:w-2/3">
                    <h1 class="font-bold text-gray-700 pb-6 text-xl">Kritik dan Saran</h1>
                    <form action="">
                        <textarea class="px-2 border-2 border-gray-300 rounded-md" name="kritikSaran" id="kritikSaran" cols="50"
                            rows="5" placeholder="Isi kritik dan saran disini!"></textarea>
                        <input type="submit" name="submit" id="submit" value="Kirim"
                            class="flex bg-slate-600 hover:bg-slate-800 hover:text-white text-white font-semibold py-2 px-5 rounded mt-4">
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-12 border-t border-gray-200 pt-8">
            <p class="text-center font-semibold text-gray-500">&copy; 2024 HIMA-SIKC. All rights reserved.</p>
        </div>
    </div>
</footer>
