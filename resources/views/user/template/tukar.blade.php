@extends('header.master')
@section('content')
<div class="container">
<div class="jumbotron text-center bg-white">
  <h1 style="color: green;">Tukar Sampah</h1>
 
</div>   
<div class="row">

<div class="col-md-4 text-center">
<a class="nav-item nav-link text-dark"  href="{{url('/NonOrganik')}}">
<img src="{{asset ('assets/image/depp.jpg') }}" width="280px" margin="auto">
<h3>Non Organik</h3></a>
</div>


<div class="col-md-4 text-center">
<img src="{{asset ('assets/image/elektronik.jpg') }}" width="310px">
<h3>Elektronik</h3>
</div>

<div class="col-md-4 text-center">
<img src="{{asset ('assets/image/pakaian.jpg') }}" width="300px">
<h3>Pakaian</h3>
</div></div></div>
@endsection