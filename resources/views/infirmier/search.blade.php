@extends('medecin.layout')
@section('content')
 
@if (isset($infirmiers))
<div class="container">
	<div class="table-responsive">
		<div class="table-wrapper">
      <div class="row" style="padding-top: 2%; padding-bottom:3%">

        <div class="container">
            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col"> #</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Genre</th>     
      <th scope="col" >Disponibilité</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($infirmiers as $item)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->prenom}}</td>
                            <td>{{$item->genre}}</td>    
                                                    
                            <td>{{$item->detail}}</td>

                          </tr>
                        @endforeach

                    </tbody>
                  </table>
</div>
</div>
</div>
                  @endif

 @endsection