<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 contained">

                    <style>
                        .contained {
                            text-align : center;
                        }
                        .contained h1 {
                            text-align : center;
                            font-size : 30px;
                        }
                    </style>

                    <h1>Generate New Questions</h1>
                    <p>
                        You cannot generate more than 10 questions per set and 50 questions in total.
                    </p>
                    <p>
                        You still have 4 Question Papers to Go <a href="#"> Subscribe Now</a>
                    </p>
                    <div id = app>

                        

                        <example-component no = 1></example-component>
                        <example-component no = 2></example-component>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
