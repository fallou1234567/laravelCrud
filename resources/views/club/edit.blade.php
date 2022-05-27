@extends('inc/menu')


@section('content')




<div class="container col-md-6 col-md-offset-3" >
    <h1 align="center">Modifier le club</h1>
    <form action="{{url('club.update/'.$club->id)}}" method="POST">
        {{-- token pour la securite --}}
        @csrf
        @method('PUT')
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Nom du club</label>
            <input type="text" class="form-control" value="{{$club->nomClub}}" name="nomclub" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-info">Update</button>
    </form>
</div>



@endsection



 