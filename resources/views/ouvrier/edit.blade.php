@extends('ouvrier.layout') 
@section('content')


    
<div class="container" style="border-style: solid;">
    <div class="card">
        <div class="card-body">
          <p class="card-text"> Ouvrier : {{ $ouvriers->nom}} {{$ouvriers->prenom}}</p>
        </div>
      </div>
    
<form action="{{route('ouvrier.update',$ouvriers->id)}}" method="POST" enctype="multipart/form-data">
 
    {{ csrf_field() }}
    {{ method_field('PUT') }}

 
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nom</label>
  <input type="text" class="form-control" name="nom" value="{{$ouvriers->nom}}" id="formGroupExampleInput" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Prénom</label>
  <input type="text" class="form-control" name="prenom" value="{{$ouvriers->prenom}}" id="formGroupExampleInput2" placeholder="">
</div>
<div  class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Genre</label>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp; <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="genre" id="inlineCheckbox1" value="Homme">
      <label class="form-check-label" for="inlineCheckbox1">Homme</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="genre" id="inlineCheckbox2" value=" Femme">
        <label class="form-check-label" for="inlineCheckbox2">Femme</label>
      </div>
</div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"name="email" value="{{$ouvriers->email}}" id="exampleInputEmail1" aria-describedby="emailHelp"> 
  </div>

 
  <div  class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Disponibilité</label>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp; <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="detail" id="inlineCheckbox1" value="disponible">
      <label class="form-check-label" for="inlineCheckbox1">disponible</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="detail" id="inlineCheckbox2" value=" non disponible">
      <label class="form-check-label" for="inlineCheckbox2">non disponible</label>
    </div>
    </div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">téléphone</label>
  <input type="text" class="form-control" name="telephone" value="{{$ouvriers->telephone}}" id="formGroupExampleInput2" placeholder="">
</div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">modifier</button>
  <a class="btn btn-primary" target="__blank" style="align: center;" href="{{ route('ouvrier.index')}}">Retour</a>
</form>
</div>


@endsection