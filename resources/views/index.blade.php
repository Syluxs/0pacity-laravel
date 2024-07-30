@extends('assets.template')

@section('content')

<div id="background-pic" class="background-pic">
    <h1><span>zer</span>0pacity</h1>
    <div id="title-string"></div>
    <h3>bots with full transparency</h3>
   
    </div>
</div>

<!--section-intro--> 
<!--bots-->
    <section id="bots" class="bots bg-gray-50 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Bots</h2>
            </div> 
            <div class="grid gap-8 lg:grid-cols-2">
                <article id="free-bot" class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img class="pic-for-index" src="{{ asset('assetsP/pic/stock-market-graph-or-forex-trading-chart-vector-26119988-1197218301.jpeg') }}" alt="test">
                    <div class="manage-info">
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400"><span id="name-of-bot">Name of bot</span></p>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Result by <span id="bot-perf-W">W</span>/<span id="bot-perf-M">M</span>/<span id="bot-perf-Y">Y</span></p>
                    </div>
                    <p id="about bot" class="mb-5 font-light text-gray-500 dark:text-gray-400">About bot</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img id="pic-of-creator" class="w-7 h-7 rounded-full" src="{{ asset('assetsP/pic/Syluxs.jpeg') }}" alt="Syluxs" />
                            <span class="font-medium dark:text-white">
                                Syluxs
                            </span>
                        </div>
                        <a href="#" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article>
                <article id="last-bot" class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <img class="pic-for-index" src="{{ asset('assetsP/pic/stock-market-graph-or-forex-trading-chart-vector-26119988-1197218301.jpeg') }}" alt="test">
                    <div class="manage-info">
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400"><span id="name-of-bot">Name of bot</span></p>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Result by <span id="bot-perf-W">W</span>/<span id="bot-perf-M">M</span>/<span id="bot-perf-Y">Y</span></p>
                    </div>
                    <p id="about bot" class="mb-5 font-light text-gray-500 dark:text-gray-400">About bot</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img id="pic-of-creator" class="w-7 h-7 rounded-full" src="{{ asset('assetsP/pic/Syluxs.jpeg') }}" alt="Syluxs" />
                            <span class="font-medium dark:text-white">
                                Syluxs
                            </span>
                        </div>
                        <a href="#" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article>
            </div>  
        </div>
    </section>
    <!--news-medias-->
    <section id="news-medias" class="news-medias bg-gray-50 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Last News/Medias</h2>
            </div> 
            <div class="grid gap-8 lg:grid-cols-2">
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">How to quickly deploy a static website</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.</p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-4">
                            <img id="pic-of-creator" class="w-7 h-7 rounded-full" src="{{ asset('assetsP/pic/Syluxs.jpeg') }}" alt="Syluxs" />
                            <span class="font-medium dark:text-white">
                                Syluxs
                            </span>
                        </div>
                        <a href="#" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article>
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/B9YZBIYmcrc?si=GB2GV5ege_WPE9jq" title="On_en_a_Gros_VIDEO" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </article>                   
            </div>  
        </div>
      </section>

@endsection