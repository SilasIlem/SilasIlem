<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        #app {
            display : flex;
            flex-direction : column-reverse;
        }

        img {
            width : 300px;
            height : 400px;
            margin-bottom : 30px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="main p-6 bg-white border-b border-gray-200 contained">
                    <div>
                        <img src="{{asset('images/Uptimyzas.jpg')}}" alt="">
                        <h1>welcome to UPTIMYZAS</h1>
                        <ul>
                            <li>Computer/Phone Engineering</li>
                            <li>Sales of Computer & Phone Accessories</li>
                            <li>Software Installations</li>
                            <li>Internet Services (CAF&Egrave;)</li>
                            <li>Admission/Visa/Scholarship Processing</li>
                            <li>Graphics design</li>
                            <li>Airtime/Data Subscription</li>
                            <li>General Printing</li>
                            <li>Computer Training</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
