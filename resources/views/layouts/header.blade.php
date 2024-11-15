<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <style>
        a.active {
            color: rgb(234 179 8);
        }

        .tab-button {
            transition: none;
        }

        .active-tab {
            /* color: rgb(56 189 248); */
            color: rgb(251 191 36);

            /* This is a shade of blue */
            /* border-bottom: 2px solid rgb(56 189 248); */
            border-bottom: 2px solid rgb(251 191 36);
            ;
        }
    </style>

</head>
