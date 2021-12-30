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
                background-image : url('images/1301.jpg');
                background-attachment : fixed;
                background-size : contain;
                color : white;
                height : 50vh;
            }

            #s-media {
                height : 40px;
                background : inherit;
                display : flex;
                align-items : center;
                justify-content: space-around;
                border-radius : 8px;
                box-shadow : 0px 0px 8px #eb2f2f;
            }

            #s-media a {
                color : #eb2f2f;
            }

            .links {
                display : flex;
                justify-content : space-between;
                padding : 16px 16px;
                width : 100%;
                min-height : 50px;
                margin-left : -16px;
            }

            #s-media a:hover {
                transform : scale(1.5);
                transition : transform .5s linear;
            }

            #open-menu {
                position : fixed;
                bottom : 8px;
                right : 8px;
                height : 50px;
                outline : none;
                border : none;
                border-radius : 4px;
                width : 50px;
                font-size : 30px;
                text-align : center;
                color : white;
                background : #eb2f2f;
                display : none;
                box-shadow : 0px 0px 20px black;
            }

           
            .links > div {
                min-width : 280px;
                max-width : 280px;
                display : flex;
                justify-content: space-between;
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
                flex-wrap : wrap;
                position : absolute;
                bottom : 50px;
            }

            #btns > button {
                height : 45px;
                border-radius : 8px;
                width : 150px;
                text-align : center;
                margin : 16px 30px;
                background : #eb2f2f;
                color : white;
                border : none;
                outline : none;
                font-size : 18px;
            }

            #btns > button:hover {
                transform : scale(1.08);
                transition : transform .5s linear;
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
                min-height : 30vh;
                border : 1px solid #eb2f2f;
            }

            #more-links {
                min-height : 60px;
                max-height : 60px;
                margin : 10px 0px;
                background : white;
                display : flex;
                justify-content : center;
                align-items : center;
                min-width : 100%;
                max-width : 100%;
                flex-wrap;
                animation : expand 2s ease-out forwards;
            }

            #more-links > *{
                min-width : 100px;
                text-align : center;
            }

            @keyframes expand {
                from {
                    transform : scaleX(0.8)
                }
                to {
                    transform : scaleX(1);
                }
            }

            #assist {
                width : 100%;
                display : flex;
                justify-content : center;
                margin-top : 40px;
                color : white;
                text-shadow : 0px 0px 4px #eb2f2f;
                font-size : 30px;
                padding : 0px 20px;
            }

            footer {
                min-width : 100vw;
                max-width : 100vw;
                min-height : 30vh;
            }

            footer > div {
                min-width : 100vw;
                max-width : 100vw;
                min-height : 30vh;
                display : flex;
                flex-direction : column;
                justify-content : space-evenly;
                text-align : center;
                align-items : center;
            }

            footer > div > * {
                margin : 16px 0px;
            }

            footer h1 {
                font-size : 30px;
                font-weight : 600;
            }

            footer form input {
                height : 50px;
                margin : 0px;
                padding-left : 20px;
            }

            footer form #subscribe {
                border-top-right-radius : 18px;
                background : #eb2f2f;
                height : 50px;
                margin : 0px;
                width : 120px;
                border : none;
                outline : none;
                color : white;
            }

            #subscribe:hover {
                background : black;
                transition : all .3s linear;
            }

            #trending > * {
                margin : 10px;
                padding : 10px;
                box-shadow : 0px 0px 2px #eb2f2f;
                border-radius : 4px;
                min-width : 96%;
                max-width : 96%;
            }

            #trending > * > h3 {
                padding : 8px;
                padding-left : 16px;
                border-bottom : .2px solid grey;
                margin-bottom : 16px;
                color : white;
                font-size : 24px;
                text-shadow : 0px 0px 8px #eb2f2f;
            }

            #trending .head {
                padding : 10px 16px 20px;
                font-weight : 600;
            }

            #trending .body img {
                height : 50px;
                width : 50px;
                float : left;
                margin : 10px;
            }

            #contact {
                min-width : 96%;
                max-width : 96%;
                text-align : center;
                margin-top : 80px;
            }

            #contact > div {
                display : flex;
                padding-left : 30px;
                height : 100px;
                align-items : center;
            }

            #contact #form-container {
                display : flex;
                padding : 0px;
                height : max-content;
                justify-content : center;
            }

            #contact i {
                padding-right : 12px;
                font-size : 36px;
            }

            #contact i:hover {
                color : #eb2f2f;
                transition : color .3s linear;
            }

            #contact form {
                min-height : 50vh;
                max-height : 50vh;
                min-width : 300px;
                max-width : 300px;
                display : flex;
                flex-direction : column;
                justify-content : space-around;
                align-items : center;
            }

            #form-container input, textarea, button{
                height : 50px;
                width : 90%;
                border-radius : 4px;
                border : 1px solid black;
                padding-left : 10px;
            }

            #form-container button {
                width : 70%;
                background : #eb2f2f;
                border : none;
                color : white;
                outline : none;
            }

            @media screen and (max-width : 764px) {
                #trending > * {
                    min-width : 96vw;
                    max-width : 96vw;
                }
                #top {
                    background-image : url('images/land.jpg');
                    background-size : cover;
                    min-height : 80vh;
                }
                header ul {
                    flex-direction : column;
                    background : #eb2f2f;
                    min-height : calc(90vh - 70px);
                    max-height : calc(90vh - 70px);
                    min-width : 90vw;
                    max-width : 90vw;
                    left : 5vw;
                    bottom : 70px;
                    z-index : 999;
                    border-radius : 8px;
                    transform-origin : bottom right;
                    transform : scale(0);
                    transition : all .3s linear;
                    position : fixed;
                }

                header ul.appear {
                    transform : scale(1);
                    transition : all .3s linear;
                }

                .links {
                    justify-content : center;
                    flex-wrap : wrap;
                }

                .links > div {
                    margin : 20px;
                }

                #open-menu {
                    display : block;
                }

                .container {
                    min-width : 100%;
                    max-width : 100%;
                    margin : 0px;
                }

                #assist {
                    margin-top : 10px;
                    color : white;
                    text-shadow : 0px 0px 4px #eb2f2f;
                    font-size : 18px;
                    padding : 0px 20px;
                }

                #landing > * {
                    min-width : 86vw;
                }

                #about {
                    margin : 0px;
                    padding : 0px;
                    padding-top : 40px;
                    text-align : center;
                }

                #about > * {
                    width : 86vw;
                    text-align : center;
                }
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
                    <ul id = navlinks>
                        <li><i class = "bi bi-house"></i>Dashboard</li>
                        <li><i class = "bi bi-people"></i>About Us</li>
                        <li><i class = "bi bi-box"></i>Our Services</li>
                        <li><i class = "bi bi-circle"></i>Our Projects</li>
                    </ul>
                </header>

                <div id = assist>
                    <h1>What Would you Like to do?</h1>
                </div>

                <div id = btns>
                    <button id = first>Get Started</button>

                    <button id = second>Generate Questions</button>

                    <button id = third>Subscribe</button> 
                </div>
                
                
                </div>

            </div>
        </div>

        <div id = more-links>
            <a href="">a</a>
            <a href="">b</a>
            <a href="">c</a>
            <a href="">d</a>
        </div>

        <button id="open-menu">
            <i class = "bi bi-house"></i>
        </button>

        <h3 style = "text-align : center; margin : 10px 0px">Welcome to Uptimyzas</h3>

        <h2 style = "padding : 20px; font-size : 18px; text-align : center;"><span style = "color : #eb2f2f; font-size : 20px">AD: </span>Gain Admission into 200 Level in Any University Of Your Choice Through IJMB/JUPEB. No JAMB | LOW FEES. Registration In Progess. <a href = "tel://07039279650">Call 07039279650 NOW!!!</a></h2>

        <div id = trending class = container>
            <div>
                <h3>Trending</h3>
                <div>
                    <p class="head">WAEC GCE Timetable</p>
                    <div class = body>
                        <img src="{{asset('images/ads/Waec-image.png')}}" alt="img" />
                        <p>2022 1st Series WAEC GCE Registration Form - Instructions and Guidelines.</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h3>Trending</h3>
                <div>
                    <p class="head">WAEC GCE Timetable</p>
                    <div class = body>
                        <img src="{{asset('images/ads/Neco-image.jpeg')}}" alt="img" />
                        <p>2022 1st Series WAEC GCE Registration Form - Instructions and Guidelines.</p>
                    </div>

                </div>
            </div>

            <div>
                <h3>Trending</h3>
                <div>
                    <p class="head">WAEC GCE Timetable</p>
                    <div class = body>
                        <img src="{{asset('images/ads/Neco-image.jpeg')}}" alt="img" />
                        <p>2022 1st Series WAEC GCE Registration Form - Instructions and Guidelines.</p>
                    </div>
                </div>
            </div>

            <div>
                <h3>Trending</h3>
                <div>
                    <p class="head">WAEC GCE Timetable</p>
                    <div class = body>
                        <img src="{{asset('images/ads/Waec-image.png')}}" alt="img" />
                        <p>2022 1st Series WAEC GCE Registration Form - Instructions and Guidelines.</p>
                    </div>

                </div>
            </div>

        </div>
            
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

        <div id = contact>
            <h1>CONTACT US</h1>
            <p>Have any enquiries or sugestions? We'd love to hear from you!</p>

            <div>
                <i class = "bi bi-sim-fill"></i><p>Location : Nigeria</p>
            </div>

            <div>
                <i class = "bi bi-envelope-fill"></i><p>Email : danryan0246@gmail.com</p>
            </div>

            <div>
                <i class = "bi bi-phone"></i><p>Call: 0707897878</p>
            </div>

            <div id = form-container>
                <form action="">
                    <input type="text" placeholder = "Your Name" />
                    <input type="email" placeholder = "Your Email" />
                    <textarea placeholder = "Interests"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>

        </div>

        
        <style>
            #quick-links {
                margin-top : 80px;
                min-height : 50vh;
                min-width : 96%;
                max-width : 96%;
                display : flex;
                flex-direction : column;
                justify-content: space-between;
                align-items : center;
            }

            #quick-links  h1 {
                min-width : 70%;
                max-width : 70%;
                text-align : center;
                padding-bottom : 12px;
                border-bottom : 2px solid #eb2f2f;
            }

            #quick-links > div {
                min-height : 40vh;
                display : flex;
                flex-direction : column;
                justify-content: space-around;
                align-items : center;
                margin-bottom : 12px;
            }
        </style>

        <div id="quick-links">
            <h1>Quick Links</h1>

            <div>
                <p>WAEC Form</p>
                <p>NECO Form</p>
                <p>JAMB Form</p>
                <p>WAEC Form</p>
                <p>NECO Form</p>
                <p>JAMB Form</p>
                <p>WAEC Form</p>
                <p>NECO Form</p>
                <p>JAMB Form</p>
            </div>
            
        </div>

        <footer class = "bg-white">
            <div>
                <h1>Uptimyzas</h1>
                <h4>AN ONLINE EXAM-SETTING PLATFORM</h4>
                
                <br />
                <br />

                <h1>Join Our Newsletter: </h1>

                <br />

                <h2>Subscribe and get the latest updates straight into your inbox</h2>
                
                <br />

                <form action="" method = POST>
                    <input type="email" placeholder = "Email Address" name = email />
                    <button type="submit" id = subscribe>Subscribe</button>
                </form>
            </div>
            
        </footer>
        
        <script>
            document.getElementById('open-menu').addEventListener('click', () => {
                document.getElementById('navlinks').classList.toggle('appear');
            });
        </script>
    </body>
</html>
