<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stars</title>
    <h1>Liste des Stars</h1>
    <a href="">Retour à l'accueil</a>
    <a href="{{route('star.create')}}" >Ajouter </a>
    <link href="css/app.css" rel="stylesheet" type="text/css" />
    <script>
      
    </script>
</head>
<body class="bg-gray-100">
    <main class="flex justify-center">
        <section class="container p-8 grid grid-cols-3"> 
            
        
        
            @if (!is_null($stars) && !empty($stars))
                @foreach ($stars as $star)
           <div class="card">
                <img src="tmp/uploads/{{ $star->image}}" alt="" srcset="">
            <div class="p-8">
               <h2 class="text-black text-xl my-3">{{ $star->nom}} {{ $star->prenom}}</h2>
                <p>{{ $star->description}}</p>
                
                    <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded"><a href="">Modifier</a></button>
                    <a class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded" href="{{route('star.delete', $star->id)}}"> Supprimer</a>
                
             </div>
            </div>
                @endforeach
            @endif
    
    
    </section>
</main>
    
</body>
</html>