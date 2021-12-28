<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Optimyzas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/bootstrap-icons/bootstrap-icons.css')}}" />
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            * {
                overflow-x : hidden;
                padding : 0px;
                margin : 0px;
            }

            ::-webkit-scrollbar {
                width : 4px;
                opacity : 0.1;
            }

            .signs a {
                min-width : 100px;
                max-width : max-content;
                height : 30px;
                background : #eb2f2f;
                color : white;
                text-align : center;
                text-decoration : none;
                padding-top : 5px;
            }

            #top {
                background-image : url('images/land.jpg');
                background-attachment : fixed;
                background-size : cover;
                color : white;
                height : 70vh;
            }

            #s-media {
                height : 40px;
                background : inherit;
                display : flex;
                align-items : center;
                justify-content: space-around;
                border-radius : 8px;
                box-shadow : 0px 0px 8px #eb2f2f;
                margin-right : 50px;
            }

            #s-media a {
                color : #eb2f2f;
            }

            .links {
                display : flex;
                justify-content : space-between;
                padding : 16px 16px;
                width : 100%;
                height : 50px;
            }
            
            .links > div {
                min-width : 200px;
                display : flex;
                justify-content: space-around;
            }

            #container {
                min-height : 100%;
                max-height : 100%;
                min-width : 100%;
                max-width : 100%;
                position : relative;
            }

            #container ul {
                width : 100%;
                height : 50px;
                list-style : none;
                display : flex;
                justify-content: space-around;
                align-items : center;
            }

            #container ul i {
                padding-right : 10px;
            }

            .container {
                min-height : 50vh;
                width : 80%;
                margin : 20px 10%;
                color : black;
                display : flex;
                justify-content : center;
                flex-wrap : wrap;
            }

            #btns {
                width : 100%;
                display : flex;
                justify-content : center;
                position : absolute;
                bottom : 50px;
            }

            #btns > button {
                height : 45px;
                border-radius : 8px;
                width : 150px;
                text-align : center;
                margin : 0px 30px;
                background : #eb2f2f;
                color : white;
                border : none;
                outline : none;
                font-size : 18px;
            }

            #landing > * {
                color : black;
                min-width : 300px; 
                width : 300px;
                margin : 20px 20px;
                padding : 16px;
                text-align : center;
                border : none;
                border-radius : 8px;
                box-shadow : 0px 0px 8px #eb2f2f;
            }

            #values > * {
                color : black;
                box-shadow: 0px 0px 4px black;
                min-width : 300px; 
                border-radius : 8px;
                width : 300px;
                margin : 20px 20px;
                padding : 16px;
                text-align : center;
                border : none;
            }

            #values > *:hover {
                transform : scale(1.02);
                transition : all .8s linear;
            }

            #about {
                padding : 30px;
                border-top : 2px solid #eb2f2f;
                border-bottom : 2px solid #eb2f2f;
            }

            footer {
                height : 30vh;
                width : 100%;
                border : 1px solid #eb2f2f;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id = top>
            <div id = container>
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 links">
                    
                    @if (Route::has('login'))
                        <div class="signs hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    <div id = 's-media'>
                        <a href=""><i class = "bi bi-facebook"></i></a>
                        <a href=""><i class = "bi bi-whatsapp"></i></a>
                        <a href=""><i class = "bi bi-twitter"></i></a>
                        <a href=""><i class = "bi bi-linkedin"></i></a>
                    </div>

                </div>
        
      
                <header>
                    <ul>
                        <li><i class = "bi bi-house"></i>Dashboard</li>
                        <li><i class = "bi bi-people"></i>About Us</li>
                        <li><i class = "bi bi-box"></i>Our Services</li>
                        <li><i class = "bi bi-circle"></i>Our Projects</li>
                    </ul>
                </header>

                <div id = btns>
                    <button id = first>Get Started</button>

                    <button id = second>Generate Questions</button>

                    <button id = third>Subscribe</button> 
                </div>
                
                
                </div>

            </div>
        </div>

        <h3 style = "text-align : center; margin : 10px 0px">Welcome to Optimyzas</h3>

        <div id="landing" class = "container">
            <div>
               <h4>Our Core Values</h4>
               <p>Transparency</p>
               <p>Honesty</p>
               <p>Focus</p>
               <p>Hardwork</p>
               <p>Trust</p>
            </div>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo et voluptatum molestias earum unde maxime facere quam accusantium blanditiis, laboriosam nihil repudiandae delectus impedit perspiciatis dicta quis a corporis officiis rem non soluta perferendis tempore, facilis sequi! Nobis necessitatibus odit, cupiditate recusandae fuga optio. Nostrum nesciunt ad repellat sapiente. Quisquam eaque nulla labore laudantium. Mollitia voluptatem exercitationem tempore recusandae blanditiis. Quasi inventore architecto omnis aut! A similique, minus veritatis voluptates incidunt placeat optio ipsum sed neque beatae aut atque veniam.
            </div>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo et voluptatum molestias earum unde maxime facere quam accusantium blanditiis, laboriosam nihil repudiandae delectus impedit perspiciatis dicta quis a corporis officiis rem non soluta perferendis tempore, facilis sequi! Nobis necessitatibus odit, cupiditate recusandae fuga optio. Nostrum nesciunt ad repellat sapiente. Quisquam eaque nulla labore laudantium. Mollitia voluptatem exercitationem tempore recusandae blanditiis. Quasi inventore architecto omnis aut! A similique, minus veritatis voluptates incidunt placeat optio ipsum sed neque beatae aut atque veniam.
            </div>
        </div>

        <div id="values" class = "container">
            <div>
                <h2>Our Vision</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quisquam libero labore quae reprehenderit! In inventore eveniet error praesentium vero aspernatur et beatae vel a. Dicta eum accusantium pariatur odio rerum molestiae veniam, non reiciendis. Eos adipisci cumque mollitia dolor similique, laudantium vitae unde incidunt corporis fugiat? Temporibus, vel similique.</p>
            </div>
            <div>
                <h2>Our Mission</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quisquam libero labore quae reprehenderit! In inventore eveniet error praesentium vero aspernatur et beatae vel a. Dicta eum accusantium pariatur odio rerum molestiae veniam, non reiciendis. Eos adipisci cumque mollitia dolor similique, laudantium vitae unde incidunt corporis fugiat? Temporibus, vel similique.</p>
            </div>
            <div>
                <h2>Our Mission</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quisquam libero labore quae reprehenderit! In inventore eveniet error praesentium vero aspernatur et beatae vel a. Dicta eum accusantium pariatur odio rerum molestiae veniam, non reiciendis. Eos adipisci cumque mollitia dolor similique, laudantium vitae unde incidunt corporis fugiat? Temporibus, vel similique.</p>
            </div>
        </div>
        
        <div id="about" class = "container">
            <h2>About Us</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatum doloremque laborum, mollitia saepe fuga voluptas reiciendis nemo. Atque nesciunt ab sit aut tempore deserunt modi quia saepe omnis reprehenderit dicta vero ducimus, iste et corrupti eveniet expedita culpa sunt tempora molestias nam debitis inventore. Similique aspernatur dolores ab accusantium impedit quas consequatur fugit, commodi eos ducimus quo atque velit quisquam tenetur iste. Ab voluptatem debitis incidunt ducimus nobis natus repudiandae harum, inventore minus quis illo eligendi impedit laboriosam quisquam voluptas iusto fugiat vel. Inventore expedita numquam, ratione autem similique cum atque quos earum alias ea provident, corporis, repellat eum.
            </p>
        </div>

        <footer>

        </footer>
        
    </body>
</html>
