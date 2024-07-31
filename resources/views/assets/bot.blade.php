@extends('assets.template')

@section('content')

<div id="background-pic" class="background-pic">
    <h1><span>zer</span>0pacity</h1>
    <div id="title-string"></div>
    <h3>bots with full transparency</h3>
   
    </div>
</div>


<section id="bot-details" class="bot-details bg-gray-50 dark:bg-gray-800">
<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Bot de Trading 1</h2>
        <p class="font-light text-gray-500 dark:text-gray-400 sm:text-xl">Détails et performances de ce bot.</p>
    </div>
    <div class="max-w-screen-md mx-auto">
        <img class="rounded-lg" src="/assets/pic/trading-bot.jpg" alt="Trading Bot">
        <div class="bot-info mt-8">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Caractéristiques</h3>
            <p class="mt-4 font-light text-gray-500 dark:text-gray-400">Description détaillée des fonctionnalités et des performances du bot...</p>
            <ul class="mt-4 list-disc list-inside text-left text-gray-500 dark:text-gray-400">
                <li>Caractéristique 1</li>
                <li>Caractéristique 2</li>
                <li>Caractéristique 3</li>
            </ul>
        </div>
    </div>
</div>
</section>
    
@endsection