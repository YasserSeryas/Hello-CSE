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
    <table border="2">
        <thead>
            <tr>
                
                <th>Nom</th>
                <th>Prenom</th>
                <th>image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!is_null($stars) && !empty($stars))
                @foreach ($stars as $star)
            <tr>

                <td>{{ $star->nom}}</td>
                <td>{{ $star->prenom}}</td>
                <td><img src="tmp/uploads/{{ $star->image}}" alt="" srcset=""></td>
                <td>
                    <a href="">Modifier</a>
                    <a class="delete" href="{{route('star.delete', $star->id)}}"> Supprimer</a>
                </td>
            </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <script>
      
    </script>
</head>
<body>
    
</body>
</html>