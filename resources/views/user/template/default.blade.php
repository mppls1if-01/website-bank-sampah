@extends('header.master')
@section('content')
<div class="container">
  <div class="jumbotron text-center bg-white">
  <h1>Tentang Bank Sampah</h1>
 
</div>   
<div class="row">

<div class="col-md-6">
<div class="jumbotron text-center bg-white">
<h2>Kami Peduli Lingkungan</h2>
<p align='justify'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
</div>
</div>

<div class="col-md-6">
<img src="{{asset ('assets/image/gambar1.jpg') }}" width="600px">
</div>

</div>
@endsection