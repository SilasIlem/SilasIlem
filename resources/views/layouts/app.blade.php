<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <style>
            main .main {
                min-height : 70vh;
            }

            #profile {
                min-height : 80vh;
                max-height : 80vh;
                min-width : 80vw;
                max-width : 80vw;
                background : white;
                border-radius : 8px;
                position : fixed;
                top : 10vh;
                left :  10vw;
                display : none;
                padding : 30px;
                border : rgb(196, 196, 196) 3px solid;
                box-shadow : 0px 0px 16px black;
            }

            #profile.show-profile {
                display : flex;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <div id="profile">
                profile here and more to come
            </div>
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer>
                welcome to the footer part of the website
            </footer>
        </div>
        <script>
            function openProfile() {
                document.getElementById('profile').classList.toggle('show-profile');
                console.log('welcome');
            }
        </script>
    </body>
</html>
