<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Past Question Generation') }}
        </h2>
    </x-slot>

    <style>
        #app {
            display : flex;
            flex-direction : column-reverse;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="main p-6 bg-white border-b border-gray-200 contained">

                    Your Free Trial Account has {{4}} more question papers

                    <p><a href = ""> Subscribe Now </a></p>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
