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

<script src="https://cdn.tailwindcss.com"></script>
<script>
    // State untuk toggle sidebar
    function toggleMobileSidebar() {
        document.getElementById("sidebar").classList.toggle("w-64");
        document.getElementById("sidebar").classList.toggle("w-20");
        document.querySelectorAll(".sidebar-text").forEach(el => {
            el.classList.toggle("hidden");
        });
    }

    // // Untuk mobile
    // function toggleMobileSidebar() {
    //     document.getElementById("sidebar").classList.toggle("hidden");
    // }
</script>
