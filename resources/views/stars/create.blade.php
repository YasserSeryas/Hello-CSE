<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stars</title>
    <h1>Liste des Stars</h1>
    <a href="">Retour à l'accueil</a>
    <a href="">Ajouter </a>
    <div class="container mt-5">
     <div class="row">
         <div class="col-md-6">
            <form class="w-full max-w-sm" action="{{route('star.store')}}" method="post" enctype="multipart/form-data">
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
                <input 
                    type="text"  
                    name="description" 
                    >
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
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
           
              </form>
             
         </div>
     </div>
 </div>
    <script>
      
    </script>
</head>
<body>
    
</body>
</html>