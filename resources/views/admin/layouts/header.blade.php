<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="{{ asset('assets/LOGO-HIMA-SIKC FIX.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<script>
    function toggleMobileSidebar() {
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.getElementById("main-content");

        // Logika untuk transisi hanya saat menutup
        if (sidebar.classList.contains("w-64")) {
            // Menutup sidebar
            sidebar.classList.remove("transition-none");
            sidebar.classList.replace("w-64", "w-24");

            // Sembunyikan teks sidebar
            document.querySelectorAll(".sidebar-text").forEach(el => {
                el.classList.add("hidden");
            });

            // Sembunyikan teks HIMA-SIKC
            const himasikcText = document.getElementById("himasikc");
            if (himasikcText) {
                himasikcText.classList.add("hidden");
            }

            // Atur ulang margin konten utama
            mainContent.classList.replace("ml-64", "ml-24");
        } else {
            // Membuka sidebar
            sidebar.classList.add("transition-none");
            sidebar.classList.replace("w-24", "w-64");

            // Tampilkan teks sidebar
            document.querySelectorAll(".sidebar-text").forEach(el => {
                el.classList.remove("hidden");
            });

            // Tampilkan teks HIMA-SIKC
            const himasikcText = document.getElementById("himasikc");
            if (himasikcText) {
                himasikcText.classList.remove("hidden");
            }

            // Atur ulang margin konten utama
            mainContent.classList.replace("ml-24", "ml-72");
        }
    }
</script>
