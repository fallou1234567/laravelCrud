@extends('inc/menu')


@section('content')




<div class="container col-md-6 col-md-offset-3" >
    <h1 align="center">veuillez remplir les informations du joueurs</h1>
    <form action="{{route('joueur.store')}}" method="POST">
        {{-- token pour la securite --}}
        @csrf
        
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Datenaissance</label>
            <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Club</label>
            <select id="disabledSelect"  name="club" class="custom-select">
                <option value="0">selectionner le club du joueur</option>
                {{-- boucle pour afficher les different club --}}
                @foreach ($club as $club)
                    
                <option value="{{$club->id}}">{{$club->nomClub}}</option>

                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>


@endsection
 