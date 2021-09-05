@extends('medecin.layout')

@section('content')
<div class="container">
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Les  <b>utilisateurs</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('user.create')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Un Nouveau Utilisateur</span></a>
											
					</div>
				</div>
			</div>


    <div class="row">
        <div class="col">

       <div class="container" style=" padding-bottom: 13px">
        <form class="form-inline" action="/search" method="POST" >
          {{ csrf_field() }}

            <div class="form-group mx-sm-3 mb-2">
              <label for="inputPassword2" class="sr-only">Password</label>
              <input type="text" name="q" class="form-control" id="inputPassword2" placeholder="chercher">
            </div>
            <button type="submit" class="btn btn-primary mb-2">chercher</button>
          </form>
       </div>

        </div>
      </div>


      @if (isset($details))
      <div class="row" style="padding-top: 2%; padding-bottom:3%">

        <div class="container">
            <div class="col">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col"> Email</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $id = 1;
                        @endphp
                        @foreach ($details as $item)
                        <tr>
                            <th scope="row">{{++ $id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>

                          </tr>
                        @endforeach

                    </tbody>
                  </table>


              </div>
        </div>




    </div>
      @endif




    <div class="row">
        @if ($users->count() > 0 )
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col"> Email</th>
                    <th scope="col" style="width:250px;"> Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $id = 1;
                    @endphp
                    @foreach ($users as $item)
                    <tr>
                        <th scope="row">{{$id++}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                        @if ($item->is_admin == 1)
                            <a class="text-info" href="{{route('user.not.admin',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-user"></i> admin </a>

                            @else
                            <a class="text-info" href="{{route('user.admin',['id'=> $item->id])}}"> <i class="fas  fa-2x fa-user"></i> not admin  </a>

                            @endif

                          <a   class="delete" href="{{ route('user.delete',['id'=>$item->id])}}"  data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                           

                         
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>


          </div>
        @else
        <div class="col">
            <div class="alert alert-danger" role="alert">
                Not tags
              </div>
        </div>

        @endif


    </div>
  </div>
  </div>
@endsection
