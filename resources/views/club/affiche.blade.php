@extends('inc/menu')

@section('content')
<div class=" container col-md-6 col-md-offset-3 ">
    <h1 align="center">Affichage des club</h1>
    <table class="table">
        <thead class="table-dark">
        <tr align="center">
            <th scope="col">#</th>
            <th scope="col">Nom du Club</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
            <th scope="col"><a href="{{url('club.index')}}" class="btn btn-primary">Ajouter</a></th>
        </tr>
        </thead>
        <tbody>
            
        @foreach ($clubs as $club)
            
            <tr align="center">
                <th scope="row">{{$num++;}}</th>
                <td>{{$club->nomClub}}</td>
                <td><a href="{{url('club.delete/'.$club->id)}}"  class="btn btn-danger">Delete</a></td>
                <td><a href="{{url('club.edit/'.$club->id)}}"  class="btn btn-warning">Update</a></td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
</div>

@endsection

 