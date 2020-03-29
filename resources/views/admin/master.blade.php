<!DOCTYPE html>
<html lang="en">
<style>
    
.dropdown {
    border: 2px;
    border-radius : 14%;
    background-color : white;
    position: relative;
    display: inline-block;
}
.dropdown-child {
    display: none;
    min-width: 200px;
}
.dropdown-child a {
    color: white;
    padding: 20px;
    text-decoration: none;
    display: block;
}
.dropdown:hover .dropdown-child {
    display: block;
}
     
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">  
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/index.css')}}">  
    <title>Bank Sampah</title>

    <style>
        fieldset.scheduler-border {
        border: 2px ;
        border-radius : 14%;
        background-color : white;
        }
        .img-fluid{
    width: 180px;
    height: 180px;
    border-radius: 50%;    
  }

 
    </style>
</head>

<body>
<div class="sidebar">
<a  href="{{url('/admin')}}"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
      <center>  <img src="{{asset ('assets/image/pp.jpg') }}" class="img-fluid" alt="ambil sampah">
      <h2>Admin</h2>
    </center><br>
    <div class="nav">
        <div class="container">
           <center> <h4>Menu</h4></center>
            <fieldset class="scheduler-border">
            <a href="{{url('/admin')}}"><i class="fa fa-fw fa-home"></i> Beranda</a>
            </fieldset><br>
            <fieldset class ="scheduler-border">
                <a href="{{url('/admin/profil')}}"><i class="fa fa-fw fa-user"></i> Profil</a>
            </fieldset><br>
            <fieldset class ="scheduler-border">
            <div class="dropdown">
            <a href="#contact"><i class="fa fa-money"></i> Kupon<i class="fa fa-caret-down" style="margin-left:90px;"></i></a>
             <div class="dropdown-child">
               <a href="{{url('/admin/kupon')}}">Daftar Kupon</a>
             <a href="{{url('/admin/riwayatkupon')}}">Riwayat Kupon</a>
          </div>
            </div>
            </fieldset><br>
            <fieldset class ="scheduler-border">
                <a href="{{route('sampah')}}"><i class="fa fa-money"></i> Poin</a>
            </fieldset>
        </div>
    </div>
</div>
</div>	
	
@yield('content')
<footer class="page-footer font-small blue">
</footer>

</div>
</body>
</html>