<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stars</title>
    <h1>Liste des Stars</h1>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <script>
      
    </script>
        <div class="w-60 h-full shadow-md bg-white px-1 absolute"> 
                     @if (!is_null($stars) && !empty($stars))
                        @foreach ($stars as $star)
                    <ul class="relative">
                        <li class="relative"><a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out"href="{{ route('star',$star->id) }}">{{ $star->nom}} {{ $star->prenom}}</a></li>
                    </ul>
                        @endforeach
                    @endif
            
                
                
            </div>
</head>
<body class="bg-gray-100">
    <main class="flex justify-center">
        <section class="container p-8 grid grid-cols-3"> 
           
        
        
           
           
            
               
            
             
    
   
    </section>
</main>
    
</body>
</html>