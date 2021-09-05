<!--


<html>
    <head>
        <meta charset="utf-8">
        <style>
            .forecast {
    margin: 0;
    padding: .3rem;
    background-color: #eee;
    font: 1rem 'Fira Sans', sans-serif;
}

.forecast > h1,
.day-forecast {
    margin: .5rem;
    padding: .3rem;
    font-size: 1.2rem;
}

.day-forecast {
    background: right/contain content-box border-box no-repeat
        url('/media/examples/rain.svg') white;
}

.day-forecast > h2,
.day-forecast > p {
    margin: .2rem;
    font-size: 1rem;
}
            body{
    background:url('images/site.jpg');
    background-repeat: no-repeat;
            background-size:cover;
}
#container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}
        .droite {
    float: right;

}
.gauche{
   
 
    float: left;

} 
        </style>
    </head>
    <body>
    <section >
        <button type="button" class="btn btn-outline-dark" style='font-size: xx-large;
                                                             width: 50%;
                                                             height:50%;
                                                             margin-left:25%;
                                                             margin-top:5%;
                                                             '><a href="{{ route('medecin.index') }}" >Médecins</a></button>
        <button  type="button" class="btn btn-outline-dark" style='font-size: xx-large;
                                                           margin-top:5%;
                                                             width: 50%;
                                                             height:50%;
                                                             margin-left:25%;
                                                             '><a  href="{{ route('paramedical.index') }}" >Personnel paramdical</a></button>
        </section>
        <section>
            <button type="button" class="btn btn-outline-dark" style='    font-size: xx-large;
                                                             margin-top:5%;
                                                             width: 50%;
                                                             height:50%;
                                                             margin-left:25%;

                                                             '><a href="" >Personnel Administratif et Technique</a>	
            </button>
            <button type="button" class="btn btn-outline-dark"style='    font-size: xx-large;
                                                             margin-top:5%;
                                                             width: 50%;
                                                             height:50%;
                                                             margin-left:25%;
                                                             
                                                             '><a href="{{ route('ouvrier.index') }}" >Personnel Ouvrier	</a>
            </button>

</section> 

</body>

-->
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
    .col-md-3{
        margin-left:7%;
        
    }
    .jumbotron{
        margin-top:15%;
        background:transparent;
        
        
    }
    body {
            color: #566787;
            background-image:url('images/staff1.jpg');
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
            background-repeat: no-repeat;
            background-size:cover;
        }
        .row{
            height: 150px;
        }


        

    </style>
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded" >
        
        <table  class="table1"style="width:100%;  background-color: white; ">
            <th><a style="font-size: 25px;" href="{{ url('/home')}}"><p style="color:rgb(64, 65, 141);">Acceuil</p></a></th>
            <th><a style="font-size: 25px;" ><p ></p></a></th>
            <th><a style="font-size: 25px;" ><p ></p></a></th>
            <th><a style="font-size: 25px;" ><p ></p></a></th>
            <th><a style="font-size: 25px;" href="{{ url('/users')}}"><p style="color:rgb(64, 65, 141);">Utilisateurs</p></a></th>
            <th><a style="font-size: 25px;" href="{{ url('/categorie')}}"><p style="color:rgb(64, 65, 141);"> Categories</p></a></th>

        </table>
       
         
       </nav>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css ">

<div class="jumbotron">
<div class="row ">
        <div class="col" style="height:40%">
            <div class="card border-info mx-sm-1 p-3" >
                <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-heart" style="color:rgb(64, 65, 141);"  aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4><a href="{{ route('medecin.index') }}" style="color:rgb(64, 65, 141);" >Médecins</a></h4></div>
                <div class="text-info text-center mt-2"><h1></h1></div>
            </div>
        </div>
        <div class="col" style="height:40%">
            <div class="card border-success mx-sm-1 p-3" >
                <div class="card border-info shadow text-info p-3 my-card"><span class="fa fa-heart" style="color:rgb(64, 65, 141);" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4><a  href="{{ route('paramedical.index') }}"  style="color:rgb(64, 65, 141);" >Personnel paramédical</a></h4></div>
                <div class="text-success text-center mt-2"><h1></h1></div>
            </div>
        </div>
        <div class="col" style="height:40%">
            <div class="card border-info mx-sm-1 p-3">
                <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-heart" style="color:rgb(64, 65, 141);"  aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4><a href="{{ route('ouvrier.index') }}" style="color:rgb(64, 65, 141);" >Personnel Ouvrier	</a></h4></div>
                <div class="text-danger text-center mt-2"><h1></h1></div>
            </div>
        </div>
        
     </div>
</div>
</body>