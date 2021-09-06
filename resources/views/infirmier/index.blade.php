@extends('infirmier.layout') 
@section('content')

     
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion des  <b>infirmiers</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('infirmier.create')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Un Nouveau Infirmier</span></a>
											
					</div>
				</div>
			</div>
      <div class="row">
        <div class="col">

       <div class="container" style=" padding-bottom: 13px">
        <form class="form-inline" action="{{url('infirmier/search')}}" method="GET" >
          {{ csrf_field() }}

            <div class="form-group mx-sm-3 mb-2">
             
              <input type="text" name="que" class="form-control" id="inputPassword2" placeholder="Recherche">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Recherche</button>
          </form>
       </div>

        </div>
      </div>
     




<br><br><br>
  
 <div > 
<table class="table table-striped table-hover" border="1">
  <thead >
    <tr>
      <th scope="col"> #</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
   
      <th scope="col"  >E_Mail</th>
      
      
      <th scope="col">Genre</th>
      <th scope="col">Téléphone</th>
      <th scope="col" >Disponibilité</th>
      <th  style="width:250px " >Actions</th>
 
    </tr>
  </thead>
  <tbody>
    @php
    $id=0;
    @endphp
    
  @foreach ($infirmiers as $item)
  <tr>
    <th scope="row">{{++ $id}}</th>
    <td>{{$item->nom}}</td>
    <td>{{$item->prenom}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->genre}}</td>
    <td>{{$item->telephone}}</td>
    <td>{{$item->detail}}</td>


    <td>

      <a href="{{ route('infirmier.show',['id'=>$item->id])}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
      <a href="{{ route('infirmier.edit',['id'=>$item->id])}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
      <a   class="delete" href="{{ route('infirmier.delete',['id'=>$item->id])}}"  data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

    </td>
  </tr>
  @endforeach


</tbody>
  
</table>
</div>


{!! $infirmiers->links() !!}
@endsection