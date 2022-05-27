@extends('inc/menu')


@section('content')




<div class="container col-md-6 col-md-offset-3" >
    <h1 align="center">modifier les informations du joueurs</h1>
    <form action="{{url('joueur.update/'.$joueur->id)}}" method="POST">
        {{-- token pour la securite --}}
        @csrf
        @method('PUT')
        
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" value="{{$joueur->nom}}" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Prenom</label>
            <input type="text" value="{{$joueur->prenom}}" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Datenaissance</label>
            <input type="date" value="{{$joueur->dateNaissance}}" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Club</label>
            <select id="disabledSelect"  name="club" class="custom-select">
                {{-- boucle pour afficher les different club --}}
                
                    
                <option value="{{$joueur->club->id}}">{{$joueur->club->nomClub}}</option>

                
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">mettre a jour</button>
    </form>
</div>


@endsection
 