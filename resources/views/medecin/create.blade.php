@extends('medecin.layout') 
@section('content')
     
<div class="container">
    
<form action="{{route('medecin.store')}}" method="POST" enctype="multipart/form-data">
 
    {{ csrf_field() }}
 
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nom</label>
  <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Prénom</label>
  <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput1" class="form-label">Age</label>
  <input type="text" class="form-control" name="age" id="formGroupExampleInput1" placeholder="">
</div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp"> 
  </div>

  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Spécialité</label>
  <select class="form-select form-select-lg mb-3" name="special" aria-label=".form-select-lg example">
  <option selected value=""></option>
  <option value="Médecine générale">Médecine générale</option>
  <option value="Endocrinologie - Diabétologie">Médecine interne</option>
  <option value="Cardiologie">Réanimation médicale</option>
  <option value="Pneumologie">Carcinologie médicale</option>
  <option value="Neurologie">Neurologie</option>
  <option value="Neurologie">Hématologie clinique</option>
  <option value="Neurologie">Nutrition et maladies nutritionnelles</option>
  <option value="Neurologie">Endocrinologie</option>
  <option value="Neurologie">Néphrologie</option>
  <option value="Neurologie">Rhumatologie</option>
  <option value="Neurologie">Gastro-entérologie</option>
  <option value="Neurologie"> rééducation et réadaptation fonctionnelle</option>
  <option value="Neurologie">Dermatologie</option>
  <option value="Neurologie">Pédiatrie</option>
  <option value="Neurologie">Médecine préventive et communautaire</option>
  <option value="Neurologie">Anesthésie - réanimation</option>
  <option value="Neurologie">Anatomie et cytologie pathologique</option>
  <option value="Neurologie">Médecine d'urgence</option>
  <option value="Neurologie">Chirurgie générale</option>
  <option value="Neurologie">Chirurgie carcinologique</option>
  <option value="Neurologie">Chirurgie thoracique</option>
  <option value="Neurologie">Chirurgie vasculaire périphérique</option>
  <option value="Neurologie">Chirurgie neurologique</option>
  <option value="Neurologie">Chirurgie urologique.Chirurgie plastique</option>
  <option value="Neurologie">Chirurgie orthopédique et traumatologique</option>
  <option value="Neurologie">Chirurgie pédiatrique</option>
  <option value="Neurologie">Chirurgie cardio-vasculaire</option>
  <option value="Neurologie">Ophtalmologie</option>
  <option value="Neurologie">Stomatologie et chirurgie maxillo-faciale</option>
  <option value="Neurologie">Gynécologie-obstétrique</option>

  
 
  
</select>
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput3" class="form-label">Nombre d'opérations</label>
    <input type="text" class="form-control" name="operation" id="formGroupExampleInput3" placeholder="">
  </div>
  
  <br>
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
  <input type="text" class="form-control" name="telephone" id="formGroupExampleInput2" placeholder="">
</div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="col-sm-12">
  <button type="submit" class="btn btn-primary">enregistrer</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
  <a class="btn btn-info " target="__blank" href="{{ route('medecin.index')}}">Retour</a>
  </div>
</form>
</div>


@endsection