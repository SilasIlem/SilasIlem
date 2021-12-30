<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Generate Question Set') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="main p-6 bg-white border-b border-gray-200 contained">

                    <style>
                        .contained {
                            text-align : center;
                        }
                        .contained h1 {
                            text-align : center;
                            font-size : 30px;
                        }

                        #independent {
                            padding-top : 70px;
                            overflow-y : scroll;
                            padding-bottom : 30px;
                        }

                        .changeable-btn {
                            min-width : 100%;
                            max-width : 100%;
                            display : flex;
                            justify-content: center;
                            margin-top : 20px;
                        }

                        #independent div button {
                            width : 100px;
                            height : 40px;
                            background : black;
                            color : white;
                        }

                        #independent button.changeable {
                            background : #eb2f2f;
                        }

                        .main {
                            position : relative;
                        }

                        #set-adder {
                            position : absolute;
                            left : 10px;
                            top : 10px;
                            width : 50px;
                            height : 50px;
                            box-shadow : 4px 4px 8px black;
                            background : white;
                            color : black;
                            border-radius : 50%;
                            font-size : 30px;
                            padding-top : 10px;
                        }
                    </style>

                    <p>
                        You cannot generate more than 10 questions per set and 50 questions in total.
                    </p>
                    <p>
                        You still have 4 Question Papers to Go <a href="#"> Subscribe Now</a>
                    </p>

                    <button title = "click to add set" id = set-adder><i class = "bi bi-plus"></i></button>
                    <div id = app>

                        <example-component no = "1" source = "{{asset('')}}"></example-component>
                        <example-component v-if = "two" no = "1" source = "{{asset('')}}"></example-component>
                        <example-component v-if = "three" no = "1" source = "{{asset('')}}"></example-component>
                        <example-component v-if = "four" no = "1" source = "{{asset('')}}"></example-component>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var adder = document.getElementById('set-adder');
        adder.addEventListener('click', () => {
            var two = true;
        })
    </script>
</x-app-layout>
