<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0PACITY 0.01</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assetsP/styles/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <header>
        <nav>
            <!--top-user class for the ccs and id for the form in js-->
            <div class="top-nav">
                <ul class="user-nav">
                    <li><button type="button" id="register-user"  class="top-user text-gray-900 bg-white border  focus:outline-none hover:bg-gray-100   font-xs rounded-full text-sm px-5  me-2  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600">Register</button></li>
                    <li><button type="button" id="log-user"  class="top-user text-gray-900 bg-white border  focus:outline-none hover:bg-gray-100  font-xs rounded-full text-sm px-5  me-2  dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600">Login</button></li>
                    <li><a href="# "><img class="user-pic" src="{{ asset('assetsP/pic/Syluxs.jpeg') }}"alt="Rounded avatar"></a></li>
                </ul>
            </div>
         <!--nav-comp-->
         <a id="logo-comp" href="/index.html"><img class="logo-pic" src="{{ asset('assetsP/pic/hunter.jpeg') }}" alt="test"></a>
         <ul id="nav-comp">  
             <li><a href="/pages/who-we-are.html">Who we are</a></li>
             <li><a href="/pages/news.html">News</a></li>
             <li><a href="/pages/medias.html">Medias</a></li>
             <li><a href="/pages/market.html">Market</a></li>
           </ul>
         <!--mobile-only -->
             <ul id="nav-mobile">
                 <li><div id="menuToggle">
                     <input type="checkbox"/>
                     <span></span>
                     <span></span>
                     <span></span>
            
                     <ul id="menu">
                         <a href="/pages/who-we-are.html"><li>Who we are</li></a>
                         <a href="/pages/news.html"><li>News</li></a>
                         <a href="/pages/medias.html"><li>Medias</li></a>
                         <a href="/pages/market.html"><li>Market</li></a>
                     </ul>
                     </div>
                 </li>
                 <li id="logo-mobile">
                     <a href="/index.html"><img class="logo-pic" src="{{ asset('assetsP/pic/hunter.jpeg') }}" alt="test"></a></li>
         </ul>
         <!--end-mobile-->
        </nav>
    </header>

        <style>
            .background-pic {
              background: url('{{ asset('assetsP/pic/business-7684234_1920.jpg') }}') no-repeat fixed 50% 50%;
              background-size: cover;
              background-repeat: no-repeat;
              padding-top: 60px;
              height: 50vw;
              width: 100%;
             overflow: hidden;
              box-sizing: border-box;
            }
        </style>

        @yield('content')
    
    <footer>
        <ul id="footer-nav">
            <li><a href="#Who we are">Who we are</a></li>
                <li><a href="#News">News</a></li>
                <li><a href="#Medias">Medias</a></li>
                <li><a href="#Market">Market</a></li>
        </ul>
        <div id="footer-string">
        </div>
        <a href="/index.html" id="logo-foot"><img src="{{ asset('assetsP/pic/hunter.jpeg') }}" alt="test"></a>
        <ul id="icon">
            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></i></li>
        </ul>
        <div id="cond-string">   
        </div>
        <ul id="terms">
            <li><a href="#">@Lytios.co</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Cookie notice</a></li>
        </ul>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>