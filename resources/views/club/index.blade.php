@extends('inc/menu')




@section('content')
<div class="container col-md-6 col-md-offset-3" >
    <h1 align="center">Ajouter un club</h1>
    <form action="{{route('club.store')}}" method="POST">
        {{-- token pour la securite --}}
        @csrf
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Nom du club</label>
            <input type="text" class="form-control" name="nomclub" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
      
        <button type="submit" class="btn btn-primary">ajouter</button>
    </form>
    
</div>

@endsection








 