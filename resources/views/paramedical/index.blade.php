@extends('medecin.layout') 
@section('content')


<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
 <link rel="stylesheet" media="screen" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
 
    <meta charset="utf-8">
    

</head>
<body >
 
<section>
<ul class="nav nav-tabs" >
    <li style="width: 18rem;
                         margin-top:5%;
                         margin-left:10%">
<div class="card" style="width: 18rem;
                         margin-top:5%;
                         margin-left:10%;
                         height:15rem;">
  <img src="{{ asset('images/nurses.jpg') }}" class="card-img-top" alt="infirmier">
  <div class="card-body">
    <h5 class="card-title" ><a  href="{{ route('infirmier.index') }}" style="color:rgb(15, 14, 94);" >Infirmier(e)s</a></h5>
    <p class="card-text" style='font-size:small;'> </p>
   
  </div>
</div>
</li>
<li style='margin-left:10%;
width: 18rem;
                         margin-top:5%;'>
<div class="card" style="width: 18rem;
 height:17rem;
                         float:right;
                         margin-top:5%;
                         margin-left:20%;">
  <img src="{{ asset('images/psy.jpg') }}" class="card-img-top" alt="psy">
  <div class="card-body">
    <h5 class="card-title" ><a  href="{{ route('psychologue.index') }}" style="color:rgb(15, 14, 94);" >Psychologue</a></h5>
    <p class="card-text" style='font-size:small;'></p>
    
  </div>
</div>
</li>
<li style="margin-left:10%;width: 18rem; margin-top:5%;">
<div class="card" style=" height:15rem;
                         width: 18rem;
                         margin-left:5%;
                         margin-top:5%;">
  <img src="{{ asset('images/download.jpg') }}" class="card-img-top" alt="download">
  <div class="card-body">
    <h5 class="card-title" ><a  href="{{ route('masseur.index') }}" style='color:rgb(15, 14, 94);'>Masseur Kinésithérapeute</a></h5>
    <p class="card-text" style='font-size:small;'></p>
    
  </div>
</div>
</li>
</ul>
</section>
<section style='float:left;
margin-bottom:5%; 
              margin-top:5%;
              margin-left:20%;'>
<div class="card" style="width: 18rem;  
                     height:17rem;     ">
  <img src="{{ asset('images/sage.jpg') }}" class="card-img-top" alt="Aide-soignant(e)s">
  <div class="card-body">
    <h5 class="card-title" ><a  href="{{ route('sage.index') }}" style='color:rgb(15, 14, 94);' >Sage Femme</a></h5>
    <p class="card-text" style='font-size:small;'> 



</p>
   
  </div>
</div>

</section>
<section>
<div class="card" style="width: 18rem;
margin-bottom:5%;
height:17rem;
                         margin-top:5%;
                         margin-left:66%;">
  <img src="{{ asset('images/prepare.jpeg') }}" class="card-img-top" alt="Préparatrice en pharmacie">
  <div class="card-body">
    <h5 class="card-title" ><a  href="{{ route('preparatrice.index') }}" style="color:rgb(15, 14, 94);" >Préparatrice en pharmacie</a></h5>
    <p class="card-text" style='font-size:small;'> </p>

  </div>
</div>

</body>
</html>
@endsection
