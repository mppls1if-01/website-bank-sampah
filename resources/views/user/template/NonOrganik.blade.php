@extends('header.master')
@section('content')
<div class="container" >
<center><h1>Sampah Non Organik</h1></center>                            
<hr>
     <legend class="scheduler-border">LIST JENIS SAMPAH</legend>
<form>
      <p><input type='checkbox' name='bahasa1' value='php' />Plastik</p>
      <p><input type='checkbox' name='bahasa2' value='asp' />Botol</p>
      <p><input type='checkbox' name='bahasa3' value='jsp' />Kaleng</p>
      </form>
      <form action="#" id="form">
    <p>
    <label>Berat Sampah</label>
    <input type="text" name="berat" placeholder="berat" id="berat" />/kg
    </p><a class="button">
      <input type='submit' name='tombol' value='Masuk Kantong' /></a> <br><hr>
</div>

@endsection