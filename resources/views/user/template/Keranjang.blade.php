@extends('header.master')
@section('content')
<div class="gambar1"><center><img src="{{asset ('assets/image/aww.jpg') }}" class="img-fluid" alt="ambil sampah"></center></div>
<div class="container">
    <h3>Kantong</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Sampah</th>
            <th scope="col">Kondisi Sampah</th>
            <th scope="col">Jumlah Sampah</th>
            <th scope="col">Poin</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
</table><br>


<div class="row">
<div class="col-md-12">
<div class="text2">
    <h6>Total</h6>
    <p>Elektronik : </p>
    <p>Perlengkapan Rumah Tangga : </P>
    <p>Pakaian : </p>
    <p>Non Organik : </p> 
</div></div><br><br><br>

<div class="col-md-12">
<h6>Metode Pengantaran</h6>
</div>
<div class="col-md-6 ">
<div class="judul">
    <p>Antar</p>
</div>
<p>Lokasi
<form>
    <select>
        <option>Lokasi 1</option>
        <option>Lokasi 2</option>
        <option>Lokasi 3</option>
        <option>Lokasi 4</option>
        </select>
</form><br>    
</p>
   
<a>
    <button style="background-color: green;  border-radius: 20px;">Request</button>
</a>
</div>


<div class="col-md-6 ">
<div class="judul">
    <p>Jemput</p>
</div>
<p>Masukkan Lokasi</p>
<form>
<input type="text" placeholder="Lokasi" id="Lokasi">
</form><br>    
<p>
   
<a>
    <button style="background-color: green;  border-radius: 20px;">Request</button>
</a>
</div>
</div>

</div>

@endsection