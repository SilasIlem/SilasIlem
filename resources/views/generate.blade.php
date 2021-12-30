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
                            padding-top : 80px;
                        }

                        #add-sub {
                            position : absolute;
                            left : 0px;
                            top : 10px;
                            width : 100%;
                            height : 70px;
                            margin-bottom : 50px;
                            display : flex;
                            justify-content: center;

                        }

                        #set-subtract, #set-adder {
                            width : 50px;
                            margin : 10px 20px;
                            height : 50px;
                            box-shadow : 4px 4px 8px black;
                            background : white;
                            color : black;
                            border-radius : 50%;
                            font-size : 30px;
                            padding-top : 10px;
                        }

                        #set-stack {
                            display : flex;
                            justify-content: space-between;
                            min-width : 100%;
                            max-width : 100%;
                            transition : transform .3s ease-in-out;
                        }

                        #set-stack li {
                            margin : 10px 0px;
                            min-width : 100%;
                            max-width : 100%;
                        }

                        #set-stack li > div {
                            min-width : 100%;
                            max-width : 100%;
                            display : flex;
                            justify-content: center;
                            align-items : center;
                        }

                        #pagination {
                            min-width : 100%;
                            max-width : 100%;
                            display : flex;
                            justify-content: center;
                            align-items : center;
                        }

                        #pagination > div {
                            max-width : max-content;
                            display : flex;
                            justify-content: center;
                        }

                        #pagination > div > * {
                            height : 50px;
                            width : 50px;
                            margin : 0px 20px;
                            background : #eb2f2f;
                            border-radius : 50%;
                            color : white;
                            font-size : 18px;
                            padding-top : 4px;
                            text-align : center;
                            font-weight : 600;
                        }

                        @media screen and (max-width : 600px) {
                            .main {
                                min-width : 100vw;
                                max-width : 100vw;
                                padding-left : 0px;
                                padding-right : 0px;
                            }

                            #app, #set-stack , #set-stack li > div > div, #set-stack li > div {
                                min-width : 100vw;
                                max-width : 100vw;
                            }

                        }
                    </style>

                    <p>
                        You cannot generate more than 10 questions per set and 50 questions in total.
                    </p>
                    <p>
                        You still have 4 Question Papers to Go <a href="#"> Subscribe Now</a>
                    </p>

                    <div id = app>

                        <ul id = set-stack>
                            <li v-for="count in counts">
                                <div>
                                    <example-component v-bind:no = "count" source = "{{asset('')}}"></example-component>
                                </div>
                            </li>
                        </ul>   
                        <div id = add-sub>
                            <button @click="addComponent()" title = "click to add set" id = set-adder><i class = "bi bi-plus"></i></button>
                            <button @click="removeComponent()" title = "click to remove set" id = set-subtract><i class = "bi bi-dash"></i></button>    
                        </div>

                        <div id = pagination>
                            <div v-for = "count in counts">
                                <button v-if = "count == 2" id = a1>1</button>
                                <button v-if = "count != 1" v-bind:id = "'a' + count">@{{count}}</button>
                            </div>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function run() {
            
            var rate = parseInt(window.getComputedStyle(document.querySelector('#set-stack li')).width);
            document.getElementById('a1')?.addEventListener('click', () => {
                    document.getElementById('set-stack').style.transform = `translateX(0px)`;
                });
            document.getElementById('a2')?.addEventListener('click', () => {
                    document.getElementById('set-stack').style.transform = `translateX(-${rate}px)`;
                });
            document.getElementById('a3')?.addEventListener('click', () => {
                    document.getElementById('set-stack').style.transform = `translateX(-${rate*2}px)`;
                });
            document.getElementById('a4')?.addEventListener('click', () => {
                    document.getElementById('set-stack').style.transform = `translateX(-${rate*3}px)`;
                });
            document.getElementById('a5')?.addEventListener('click', () => {
                    document.getElementById('set-stack').style.transform = `translateX(-${rate*4}px)`;
                });
        }
        run();
        setInterval(() => {
            run()
        }, 2000);
    </script>
</x-app-layout>