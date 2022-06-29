<!DOCTYPE html>
<html lang="en" data-theme="light">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Fiche Star</title>
      <meta name="author" content="name">
      <meta name="description" content="description here">
      <meta name="keywords" content="keywords,here">
      <link rel="stylesheet" href="{{asset('css/app.css') }}"/>
   
   </head>
   
   <body class="w-full h-full bg-[#fff]">
      <div class="">
      <div class="navbar bg-base-100 w-full shadow-lg">
  <div class="navbar-start">
    
  </div>
  <div class="navbar-center">
    <a class="btn btn-ghost normal-case text-xl">Profile Browser</a>
  </div>
  <div class="navbar-end">
  
    <button class="btn btn-ghost btn-circle">
      <div class="indicator">
       <p><a href="{{ route('stars.index') }}">Gestion</p>
      </div>
    </button>
  </div>
</div>
         <div class="h-full w-full flex flex-col md:flex-row gap-8">
            <ul class="menu menu-horizontal md:menu-vertical mt-4 lg:mt-0 shadow-lg w-full md:w-56 overflow-x-scroll h-20 md:h-screen">
                  @if (!is_null($stars) && !empty($stars))
                        @foreach ($stars as $star)
                        <li class="hover:border-b-2 hover:border-b-red-500"><a href="{{$star->id}}" class="whitespace-nowrap">{{ $star->nom}} {{ $star->prenom}}</a></li>
                  @endforeach
                  @endif
            </ul>
            <div class="h-full w-full flex flex-col md:flex-row gap-4 mt-10 px-8">
                  <img src="{{ asset('tmp/uploads/'.trim($starOpen->image, '"')) }}" class="w-48 h-48 object-fit"/>
                  <div>
                     <h2 class="font-bold text-md lg:text-lg">{{ $starOpen->nom}} {{ $starOpen->prenom}}</h2>
                     <p>{{ $starOpen->description}}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   
</html>
