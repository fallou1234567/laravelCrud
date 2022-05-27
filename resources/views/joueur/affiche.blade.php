@extends('inc/menu')

@section('content')
<div class=" container col-md-6 col-md-offset-3 ">
    <h1 align="center">Affichage des joueurs</h1>
    <table class="table">
        <thead class="table-dark">
        <tr align="center">
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col"  >date de naissance</th>
            <th scope="col">Club</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
            <th scope="col">detail</th>
            <th scope="col"><a href="{{url('club.index')}}" class="btn btn-primary">Ajouter</a></th>
        </tr>
        </thead>
        <tbody>
            
        @foreach ($joueurs as $joueur)
            
            <tr align="center">
                <th scope="row">{{$num++;}}</th>
                <td>{{$joueur->nom}}</td>
                <td>{{$joueur->prenom}}</td>
                <td>{{$joueur->dateNaissance}}</td>
                <td>{{$joueur->club->nomClub}}</td>
                <td><a href="{{url('joueur.delete/'.$joueur->id)}}"  class="btn btn-danger">Delete</a></td>
                <td><a href="{{url('joueur.edit/'.$joueur->id)}}"  class="btn btn-warning">Update</a></td>
                <td><a href="{{url('joueur.show/'.$joueur->id)}}"  class="btn btn-primary">Detail</a></td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
</div>

@endsection

 