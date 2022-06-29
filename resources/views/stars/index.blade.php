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
  <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost btn-circle">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="/">Retour à l'accueil</a></li>
        
        <li><a href="https://github.com/YasserSeryas/Hello-CSE">About</a></li>
      </ul>
      
    </div>
  </div>
  <div class="navbar-center">
    <a class="btn btn-ghost normal-case text-xl">Gestion</a>
  </div>
  <div class="navbar-end">
  
    <button class="btn btn-ghost btn-circle">
      
    </button>
  </div>
</div>
         <div class="h-full w-full flex flex-col md:flex-row gap-8">
            <ul class="menu menu-horizontal md:menu-vertical mt-4 lg:mt-0 shadow-lg w-full md:w-56 overflow-x-scroll h-20 md:h-screen ">
                  @if (!is_null($stars) && !empty($stars))
                        @foreach ($stars as $star)
                        <li class="hover:border-b-2 hover:border-b-red-500"><a href="{{route('star',$star->id)}}" class="whitespace-nowrap">{{ $star->nom}} {{ $star->prenom}}</a></li>
                  @endforeach
                  @endif
                  <li> <a href="{{route('stars.create')}}" >Ajouter une nouvelle fiche</a></li>
            </ul>
       
                
            <div class="h-full w-full flex flex-col md:flex-row gap-4 mt-10 px-8">
                @if (!is_null($stars) && !empty($stars))
                  @foreach ($stars as $star)  
            <img src="tmp/uploads/{{ $star->image}}" alt="" srcset="" class="w-48 h-48 object-fit">
                  <div>
                     <h2 class="font-bold text-md lg:text-lg">{{ $star->nom}} {{ $star->prenom}}</h2>
                     <p>{{ $star->description}}</p>
                     <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded"><a href="{{ route('stars.edit',$star->id) }}">Modifier</a></button>
                    <a class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded" href="{{route('stars.delete', $star->id)}}"> Supprimer</a>
               @endforeach
              @endif
                  </div>
              
               </div>     
          
            </div>
           
         </div>
         
      </div>      
   </body>
<!-- <body class="bg-gray-100">
    <main class="flex justify-center">
        <section class="container p-8 grid grid-cols-2"> 
            
        
        
            @if (!is_null($stars) && !empty($stars))
                @foreach ($stars as $star)
           <div class="card">
                <img src="tmp/uploads/{{ $star->image}}" alt="" srcset="">
            <div class="p-8">
               <h2 class="text-black text-xl my-3">{{ $star->nom}} {{ $star->prenom}}</h2>
                <p>{{ $star->description}}</p>
                
                    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded"><a href="{{ route('stars.edit',$star->id) }}">Modifier</a></button>
                    <a class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded" href="{{route('stars.delete', $star->id)}}"> Supprimer</a>
                
             </div>
            </div>
                @endforeach
            @endif
    
    
    </section>
</main>
    
</body> -->
</html>