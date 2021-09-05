@extends('infirmier.layout')
@section('content')

<body style="
        
            background-image:url('images/staff1.jpg');
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
            background-repeat: no-repeat;
            background-size:cover;
        ">
@if (isset($users))
<div class="container-xl">
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
          
      <th scope="col" >Email</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($users as $item)
                        <tr>
                            <th scope="row">{{$i++}}</th>
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
</body>
 @endsection