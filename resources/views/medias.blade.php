@extends('assets.template')

@section('content')

<div id="background-pic" class="background-pic">
    <h1><span>zer</span>0pacity</h1>
    <div id="title-string"></div>
    <h3>bots with full transparency</h3>
   
    </div>
</div>
   

    <section id="medias" class="medias bg-gray-50 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Medias</h2>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                <!-- Exemple de vidéo -->
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="video-container">
                        <iframe class="video" src="https://www.youtube.com/embed/your-video-id" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="manage-info">
                        <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Titre de la vidéo</h3>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Description de la vidéo...</p>
                    </div>
                </article>
                <!-- Répétez pour d'autres vidéos -->
            </div>
        </div>
    </section>
    
@endsection