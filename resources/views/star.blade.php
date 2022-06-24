<!DOCTYPE html>
<html lang="en">
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
   
   <body class="bg-gray-100 font-sans leading-normal tracking-normal">
      <div class="flex md:flex-row-reverse flex-wrap">
		
		 <!--Main Content-->
         <div class="w-full md:w-4/5 bg-gray-100">
            <div class="container bg-gray-100 pt-16 px-6">
               <div class="mx-auto shadow-lg flex flex-col rounded-lg overflow-hidden static">
                  <img src="{{ asset('tmp/uploads/'.trim($starOpen->image, '"')) }}" height="300px" width="300px">
                   <div class="p-8">
                      <h2 class="text-black text-xl my-3">{{ $starOpen->nom}} {{ $starOpen->prenom}}</h2>
                       <p>{{ $starOpen->description}}</p>
                     </div>
            </div>
         </div>
		 
		 <!--Sidebar-->
         <div class="w-full md:w-1/5 bg-gray-100  md:bg-gray-100 px-2 text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-16 md:h-screen md:border-r-4 md:border-gray-600">
            <div class="md:relative mx-auto lg:float-right lg:px-6 ">
               <ul class="list-reset flex flex-row md:flex-col text-center md:text-left">
                  @if (!is_null($stars) && !empty($stars))
                        @foreach ($stars as $star)
                  <li ><a class="flex items-center text-sm py-4 px-6 h-12 overflow-scroll text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out" href="{{$star->id}}">{{ $star->nom}} {{ $star->prenom}}</a></li>
                  @endforeach
                  @endif
              
               </ul>
            </div>
         </div>
      </div>
   </body>
</html>
