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
        <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css')}}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <style>
            * {
                padding : 0px;
                margin : 0px;
                box-sizing : border-box;
            }

            body {
                overflow-x : hidden;
                overflow-y : visible;
            }

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

            footer {
                min-width : 100vw;
                max-width : 100vw;
                min-height : 30vh;
                display : flex;
                flex-direction : column;
                justify-content : space-evenly;
                align-items : center;
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
            <footer class = "bg-white">
                <h1>Optimyzas</h1>
                <h4>AN ONLINE EXAM-SETTING PLATFORM</h4>
                
                <br />
                <br />

                <p>Join Our Newsletter</p>

                <br />

                <p>subscribe and get the latest updates straight into your inbox</p>
                
                <br />

                <form action="" method = POST>
                    <input type="email" placeholder = "Email Address" name = email />
                    <button type="submit">Subscribe</button>
                </form>
            </footer>
        </div>
        <script>
            function openProfile() {
                document.getElementById('profile').classList.toggle('show-profile');
            }
        </script>
    </body>
</html>
