<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stars</title>
    
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
 
        
</head>
<body class="w-full h-full bg-[#fff]">
      <div class="">
      <div class="navbar bg-base-100 w-full shadow-lg">
  <div class="navbar-start">
    
  </div>
  <div class="navbar-center">
    <a class="btn btn-ghost normal-case text-xl">Accueil</a>
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
                        <li class="hover:border-b-2 hover:border-b-red-500"><a href="{{route('star',$star->id)}}" class="whitespace-nowrap">{{ $star->nom}} {{ $star->prenom}}</a></li>
                  @endforeach
                  @endif
            </ul>
            <div class="h-full w-full flex flex-col md:flex-row gap-4 mt-10 px-8">
                  
                  <div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>