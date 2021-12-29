<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
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

                    <h1 style = "text-align : center; font-size : 30px; color : white; text-shadow : 0px 0px 4px #eb2f2f">Generated Questions History</h1>

                    <div id = app>

                        @foreach($allthem as $each)
                            
                            <gen-card no = {{$each['id']}} title="{{$each['title']}}"></gen-card>
                        
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
