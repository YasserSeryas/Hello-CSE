<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Stars</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- <h1>Liste des Stars</h1>
    <a href="">Retour à l'accueil</a>
    <a href="">Ajouter </a>
    <div class="container mt-5">
     <div class="row">
         <div class="col-md-6">
            <form class="w-full max-w-sm" action="{{route('stars.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Nom</label>
                <input 
                    type="text" 
                    name="nom"
                    >
                <label for="">Prenom</label>
                <input 
                    type="text"  
                    name="prenom" 
                    >
                    <label for="">description</label>
                <textarea 
                    
                    name="description" 
                    ></textarea>
                <label for="">Image</label>
                <input 
                    type="file" 
                    name="image" 
                    id="inputImage"
                    class="form-control @error('image') is-invalid @enderror">
  
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Créer</button>
                </div>
           
              </form>
             
         </div>
     </div>
 </div> -->
</head>
<body class="w-full h-full bg-[#fff]">
      <div class="">
      <div class="navbar bg-base-100 w-full shadow-lg">
  <div class="navbar-start">
    
  </div>
  <div class="navbar-center">
    <a class="btn btn-ghost normal-case text-xl">Création d'une fiche </a>
  </div>
  <div class="navbar-end">
  
    <button class="btn btn-ghost btn-circle">
      <div class="indicator">
       <p><a href="{{ route('stars.index') }}">Retour à Gestion</a></p>
      </div>
    </button>
  </div>
</div>
         <div class="h-full w-full flex flex-col md:flex-row gap-8">
            
          
            <div class="h-full w-full flex flex-col md:flex-row gap-4 mt-10 px-8">
            <div class="row">
         <div class="col-md-6">
            <form class="w-full max-w-sm" action="{{route('stars.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-control w-full max-w-xs">
  <label class="label">
    <span class="label-text">Le Nom</span>
    
  </label>
  <input type="text"  name="nom" placeholder="Taper le nom" class="input input-bordered w-full max-w-xs" />
  
  <label class="label">
    <span class="label-text">Le Prenom</span>
    
  </label>
  <input type="text" name="prenom" placeholder="Prenom" class="input input-bordered w-full max-w-xs" />
  <label class="label">
    <span class="label-text">La Description</span>
  </label>
  <textarea type="text"  name="description" placeholder="Description ...." class="textarea textarea-bordered h-24"></textarea>
  <label class="label">
    <span class="label-text">Une image</span>
    
  </label>
  <input type="file" name="image" id="inputImage"  class="form-control @error('image') is-invalid @enderror" class="input input-bordered w-full max-w-xs" />
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
</div>
<div class="mb-3">
                    <button type="submit" class="btn btn-success">Créer</button>
                </div>
             
         </div>
                  <div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>