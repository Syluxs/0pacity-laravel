@extends('assets.template')

@section('content')

<div id="background-pic" class="background-pic">
    <h1><span>zer</span>0pacity</h1>
    <div id="title-string"></div>
    <h3>bots with full transparency</h3>
   
    </div>
</div>

<section id="article-details" class="article-details bg-gray-50 dark:bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="max-w-screen-sm mx-auto">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Titre de l'Article 1</h2>
            <p class="font-light text-gray-500 dark:text-gray-400 sm:text-xl">Publié le 1er mai 2024</p>
            <img class="rounded-lg mt-8" src="/assets/pic/article-image.jpg" alt="Article Image">
            <div class="article-content mt-8">
                <p class="font-light text-gray-500 dark:text-gray-400">Contenu détaillé de l'article...</p>
            </div>
        </div>
    </div>
</section>
    
@endsection