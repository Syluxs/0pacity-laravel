@extends('assets.template')

@section('content')

<div id="background-pic" class="background-pic">
    <h1>News</h1>
    </div>
</div>




<section id="news" class="news bg-gray-50 dark:bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">News</h2>
            <p class="font-light text-gray-500 dark:text-gray-400 sm:text-xl">Les dernières nouvelles et mises à jour.</p>
        </div>
        <div class="grid gap-8 lg:grid-cols-2">
            <!-- Exemple d'article -->
            <div class="article-card p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg" src="/assets/pic/article-image.jpg" alt="Article Image">
                <div class="p-5">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Titre de l'Article 1</h3>
                    <p class="mb-3 font-light text-gray-500 dark:text-gray-400">Résumé de l'article...</p>
                    <a href="{{ url('/article/1') }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Lire plus
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 9H3a1 1 0 110-2h9.293L8.707 3.293a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L12.293 9z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
            <!-- Répétez pour d'autres articles -->
        </div>
    </div>
</section>
    
@endsection