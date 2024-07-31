@extends('assets.article')

@section('content')

<div id="background-pic" class="background-pic">
    <h1><span>zer</span>0pacity</h1>
    <div id="title-string"></div>
    <h3>bots with full transparency</h3>
   
    </div>
</div>


<section id="user-profile" class="user-profile bg-gray-50 dark:bg-gray-800">
<div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
    <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
        <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">User Profile</h2>
    </div>
    <div class="profile-container">
        <div class="profile-header">
            <img id="profile-pic" class="w-24 h-24 rounded-full mx-auto" src="/assets/pic/user-profile-pic.jpeg" alt="User Profile Picture">
            <h3 class="mt-4 text-xl font-bold text-gray-900 dark:text-white">Nom d'utilisateur</h3>
            <p class="text-gray-500 dark:text-gray-400">Email: user@example.com</p>
        </div>
        <div class="profile-content mt-8">
            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Informations supplémentaires</h4>
            <p class="mt-2 text-gray-500 dark:text-gray-400">Description de l'utilisateur...</p>
        </div>
    </div>
</div>
</section>
    
@endsection